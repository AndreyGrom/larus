<?php

class ForumController extends Controller {
    public function __construct($query, $controller) {
        parent::__construct($query, $controller);
        $this->row = array();
        $this->cid = isset($this->get['cid']) ? $this->get['cid'] : 0;
        $this->id = isset($this->get['id']) ? $this->get['id'] : 0;
        $this->tid = isset($this->get['tid']) ? $this->get['tid'] : 0;
        $this->mid = isset($this->get['mid']) ? $this->get['mid'] :0;
        $this->c_name = '';
        $this->categories = array();
        $this->template = 'default';
        $this->to_topic = false;
        $this->coockie_name = 'tv';
        $this->view_days = 3;
        $this->per_page = 2;
        $this->online_interval = 10;
        $this->bb = false;
    }
    public function Index(){
        require_once PLUGINS_DIR.'bbcode/bbcode.lib.php';
        $this->bb = new bbcode;
        $this->css[]  = HTML_CONTROLLERS_DIR.'forum/style.css';
        $this->js[]  = HTML_PLUGINS_DIR.'bbcode/xbb.js.php';
        $this->js[]  = HTML_CONTROLLERS_DIR.'forum/action.js';

        if (isset($this->post['new-topic'])){
            $this->SaveTopic();
        }
        if (isset($this->post['add-message'])){
            $this->SaveMessage();
        }
        if (isset($this->post['save-message'])){
            $this->SaveMessage();
        }
        if (!$this->config->CatalogEnabled){
            $message = 'Модуль не активирован!<br/><a href="/">На главную</a>';
            $title = 'Модуль не активирован!';
            return $this->SetSystemPage($title, $message);
        }
        elseif (count($this->query) == 0){
            $this->ShowForums();
        }
        elseif (isset($this->get['new-topic']) && $this->cid > 0){
            $this->ShowNewTopic();
        }
        elseif (isset($this->get['edit-message'])){
            $this->ShowEditMessage();
        }
        elseif (isset($this->get['delete-message'])){
            $this->DeleteMessage();
        }
        elseif ($this->tid > 0 && $this->cid > 0){
            $this->ShowMessages($this->tid);
        }
        elseif ($this->cid > 0){
            $this->ShowTopics($this->cid);
        }
        return $this->content;
    }

    public function ShowForums($id = 0){

        $sql = "SELECT * FROM `".db_pref."forum_c` WHERE `PUBLIC`=1";
        $query = $this->db->query($sql);
        $forums = array();
        $categories = array();
        if ($this->db->num_rows($query) > 0){
            $forums = $this->db->fetch_all($query);
            $sql = "SELECT c.*,@cid:=c.ID,
            (SELECT COUNT(*) FROM `".db_pref."forum_i` WHERE `PARENT`=@cid ) AS TOPICS_COUNT,
            (SELECT `NAME` FROM `".db_pref."forum_i` WHERE `PARENT`=@cid ORDER BY ID DESC LIMIT 1) AS LAST_TOPIC_NAME,
            (SELECT `ID` FROM `".db_pref."forum_i` WHERE `PARENT`=@cid ORDER BY ID DESC LIMIT 1) AS LAST_TOPIC_ID,
            @last_user_id:=(SELECT `USER_ID` FROM `".db_pref."forum_p` WHERE `CATEGORY_ID`=@cid ORDER BY ID DESC LIMIT 1) AS LAST_USER_ID,
            (SELECT `NICK` FROM `".db_pref."users` WHERE `ID`=@last_user_id LIMIT 1) AS LAST_USER_NICK,
            (SELECT COUNT(*) FROM `".db_pref."forum_p` WHERE `CATEGORY_ID`=@cid AND `TO_TOPIC`<>1) AS OTV_COUNT,
            (SELECT `DATE_CREATE` FROM `".db_pref."forum_p` WHERE `CATEGORY_ID`=@cid ORDER BY ID DESC LIMIT 1) AS CATEGORY_DATE_UPDATE
             FROM `".db_pref."forum_c` c
             WHERE c.`PARENT` <> 0 AND c.`PUBLIC`=1";
            $query = $this->db->query($sql);
            if ($this->db->num_rows($query) > 0){
                for ($i=0;$i<$this->db->num_rows($query);$i++){
                    $row = $this->db->fetch_array($query);
                    $row['CATEGORY_DATE_UPDATE'] = $this->DateFormatForum($row['CATEGORY_DATE_UPDATE']);
                    $categories[] = $row;
                }
            }
        }
        $this->breadcrumbs = array(
            array('text' => 'Главная', 'href' => '/'),
            array('text' => $this->config->ForumModuleTitle, 'href' => ''),
        );
        $this->page_title = $this->config->ForumModuleTitle;
        $this->meta_title = $this->page_title .' -'. $this->config->SiteTitle;
        $this->assign(array(
            'page_title'       =>  $this->page_title,
            'forums'           => $forums,
            'categories'       => $categories,
            'cid'              => $this->cid,
            'content_type'     => 'forum-list',
        ));
        $this->GetStat();
        $this->SetPath('forum/list/');
        $this->content = $this->SetTemplate($this->template.'.tpl');
        return true;
    }

    public function GetTopicPagination($count){

    }

    public function GetTopics($cid = 0){
        $topics = array();
        if ($cid > 0){
          $parent = " WHERE  i.`PARENT` = '$cid'";
        }
        $sql = "SELECT i.*,u.ID AS UID,u.NICK AS NICK,@cid:=i.ID,
        (SELECT COUNT(*) FROM `".db_pref."forum_p` WHERE `PARENT`=@cid) AS OTV_CNT,
        (SELECT DATE_CREATE FROM `".db_pref."forum_p` WHERE `PARENT`=@cid ORDER BY DATE_CREATE DESC LIMIT 1) AS UPDATE_DATE,
        @last_user_id:=(SELECT USER_ID FROM `".db_pref."forum_p` WHERE `PARENT`=@cid ORDER BY DATE_CREATE DESC LIMIT 1) AS LAST_USER_ID,
        (SELECT NICK FROM `".db_pref."users` WHERE `ID`=@last_user_id LIMIT 1) AS LAST_USER_NICK
        FROM `".db_pref."forum_i` i LEFT JOIN `".db_pref."users` u ON u.ID=i.USER_ID $parent ORDER BY UPDATE_DATE DESC";

        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $array = $this->GetCoockieView();
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);

                $b = true;
                if (count($array) > 0){
                    foreach ($array as $v){
                        if ($v[0] == $row['ID'] && $v[0] < $row['UPDATE_DATE']){
                            $b = false;
                            break;
                        }
                    }
                }
                if ($b){
                    $row['NO_READ'] = 1;
                }

                if ($row['OTV_CNT']  > $this->per_page){
                    $row['PAGINATION'] = '';
                    $num_pages = ceil($row['OTV_CNT'] / $this->per_page)+1;
                    for ($j=1; $j<$num_pages;$j++){
                        $row['PAGINATION'] .= '<a class="topic-pagination" href="/forum/cid='.$row['PARENT'].'/tid='.$row['ID'].'/page='.$j.'">'.$j.'</a> ';
                    }
                }


                $row['UPDATE_DATE'] = $this->DateFormatForum($row['UPDATE_DATE']);
                $topics[] = $row;
            }
        }
        return $topics;
    }

    public function GetForumInfo($id){
        $forum = array();
        $sql = "SELECT * FROM `".db_pref."forum_c` WHERE `ID` = '$id' AND `PUBLIC`=1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $forum = $this->db->fetch_array($query);
        }
        return $forum;
    }

    public function ShowNewTopic(){
        $this->c_name = 'Новая тема';
        $this->page_title = $this->c_name;
        $this->assign(array(
            'site_title'       => $this->c_name.' - '. $this->config->SiteTitle,
            'page_title'       => $this->c_name,
            'cid'              => $this->cid,
            'new_topic'        => true,
        ));
        $this->SetPath('forum/list/');
        $this->content = $this->SetTemplate($this->template.'.tpl');
    }

    public function ShowEditMessage(){
        if ($this->cid > 0 && $this->mid > 0){
            $message = $this->GetMessage($this->mid);
            $forum_info = $this->GetForumInfo($this->mid);
            $topic_info = $this->GetTopicInfo($this->tid);
            $this->c_name = $topic_info['NAME'];
            $this->page_title = $this->c_name;
            $this->assign(array(
                'site_title'       => $this->c_name.' - '. $this->config->SiteTitle,
                'page_title'       => $this->c_name,
                'cid'              => $this->cid,
                'message'          => $message,
                'forum_info'       => $forum_info,
                'topic_info'       => $topic_info,
                'edit_message'     => true,
            ));
            $this->SetPath('forum/list/');
            $this->content = $this->SetTemplate($this->template.'.tpl');
        }
    }

    public function ShowTopics($cid=0){
        $forum_info = $this->GetForumInfo($cid);
        $topics = $this->GetTopics($cid);

        $this->page_title = $forum_info['TITLE'];
        $this->meta_title = $this->page_title.' - '.$this->config->ForumModuleTitle .' - ' . $this->config->SiteTitle;
        $this->breadcrumbs = array(
            array('text' => 'Главная', 'href' => '/'),
            array('text' => $this->config->ForumModuleTitle, 'href' => '/forum'),
            array('text' => $this->page_title, 'href' => ''),
        );

        $this->assign(array(
            'page_title'       => $this->page_title,
            'topics'           => $topics,
            'cid'              => $this->cid,
            'fid'              => $this->get['fid'],
            'forum_info'       => $forum_info,
            'content_type'     => 'topic-list',
        ));
        $this->GetStat();
        $this->SetPath('forum/list/');
        $this->content = $this->SetTemplate($this->template.'.tpl');
    }

    public function SaveTopic(){
        if ($this->cid > 0){
            $cid = $this->cid;
            $mid = $this->mid;
            $tid = $this->tid;
            $uid = $this->user['ID'];
            $topic_one_message_header =  isset($this->post['topic-one-message-header']) ? 1 : 0;
            $top =  isset($this->post['topic-top']) ? 1 : 0;
            $close =  isset($this->post['topic-close']) ? 1 : 0;
            $name = $this->post['topic-name'];
            $desc = $this->post['topic-desc'];
            if (isset($mid)){
                $sql = "UPDATE `".db_pref."forum_i` SET
                `NAME` = '$name',
                `DESC` = '$desc',
                `TOP` = '$top',
                `CLOSE` = '$close',
                `ONE_MESSAGE_HEADER` = '$topic_one_message_header'
                WHERE `ID` = $tid";
                $query = $this->db->query($sql);
                $this->to_topic = true;
                $this->SaveMessage();
            } else {
                $sql = "INSERT INTO `".db_pref."forum_i` (
            `USER_ID`,
            `NAME`,
            `DESC`,
            `PARENT`,
            `TOP`,
            `CLOSE`,
            `ONE_MESSAGE_HEADER`
            ) VALUES(
            '$uid',
            '$name',
            '$desc',
            '$cid',
            '$top',
            '$close',
            '$topic_one_message_header'
            )";
                $query = $this->db->query($sql);
                $this->tid = $this->db->last_id();
                $this->to_topic = true;
                $this->SaveMessage();
            }

        }
    }

    public function SaveMessage(){
        $message = $this->db->input($this->post['topic-message']);
        $date_update = time();
        $date_create = time();
        $cid = $this->cid;
        $uid = $this->user['ID'];
        $tid = $this->tid;
        $mid = $this->mid;
        $to_topic = 0;
        if ($this->to_topic){
            $to_topic = 1;
        }
        $files = '';
        $images = '';
        if (!isset($mid)){
            $sql = "INSERT INTO `".db_pref."forum_p` (
            `USER_ID`,
            `PARENT`,
            `CATEGORY_ID`,
            `MESSAGE`,
            `FILES`,
            `IMAGES`,
            `DATE_CREATE`,
            `TO_TOPIC`
            ) VALUES(
            '$uid',
            '$tid',
            '$cid',
            '$message',
            '$files',
            '$images',
            '$date_create',
            '$to_topic'
            )";
            $query = $this->db->query($sql);
        } else {
            $sql = "UPDATE `".db_pref."forum_p` SET
                `MESSAGE` = '$message',
                `DATE_UPDATE` = '$date_update'
                WHERE `ID` = $mid";
            $query = $this->db->query($sql);
        }
        $this->Head('/forum/cid='.$cid.'/tid='.$tid);
    }

    public function GetMessage($id){
        $result = array();
        $sql = "SELECT p.*,u.NICK AS NICK,u.ID AS USER_ID FROM `".db_pref."forum_p` p
        LEFT JOIN `".db_pref."users` u ON p.USER_ID=u.ID WHERE p.`ID`='$id' LIMIT 1";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $row = $this->db->fetch_array($query);
            $row['DATE_CREATE'] = $this->DateFormatForum($row['DATE_CREATE']);
            $this->bb->parse($row['MESSAGE']);
            $row['MESSAGE_BB'] = $this->bb->get_html();
            if ($row['DATE_UPDATE']){
                $row['DATE_UPDATE'] = $this->DateFormatForum($row['DATE_UPDATE']);
            }
            $result = $row;
        }
        return $result;
    }

    public function GetMessages($id = 0){
        $result = array();
        $sql = "SELECT p.*,u.NICK AS NICK,u.AVATAR,u.ID AS USER_ID,u.SIGNATURE AS SIGNATURE,u.SITE AS USER_SITE,u.DATE_ACTIVE AS DATE_ACTIVE,@uid:=u.ID,
         (SELECT COUNT(*) FROM `".db_pref."forum_p` WHERE USER_ID=@uid) AS USER_MESSAGE_COUNT
         FROM `".db_pref."forum_p` p
        LEFT JOIN `".db_pref."users` u ON p.USER_ID=u.ID";


        if ($id > 0){
            $sql .= " WHERE `PARENT` = '$id'";
        }
        $url_cid = '';
        if ($this->cid > 0){
            $url_cid = "/cid=$this->cid";
        }
        $params = array(
            'sql' => $sql,
            'per_page' =>$this->per_page,
            'current_page' => isset($this->get['page'])?$this->get['page']:0,
            'link' => "/forum".$url_cid."/tid=$id/",
            'get_name' => 'page',
        );
        $result2 = $this->getPagination($params);
        $query = $result2['query'];
        $this->num_pages = $result2['num_pages'];
        $this->pagination = $result2['pagination'];

        if ($this->db->num_rows($query) > 0){
            for ($i=0; $i < $this->db->num_rows($query); $i++) {
                $row = $this->db->fetch_array($query);
                if ($row['AVATAR']){
                    $upload_dir    = UPLOAD_IMAGES_DIR.'users/avatars/'.$row['USER_ID'].'/';
                    $row['AVATAR_SRC'] = Func::getInstance()->GetImage($upload_dir.$row['AVATAR'],110,110,'w','users/avatars/'.$row['USER_ID']);
                }
                $this->bb->parse($row['MESSAGE']);
                $row['MESSAGE_BB'] = $this->bb->get_html();
                $row['DATE_CREATE'] = $this->DateFormatForum($row['DATE_CREATE']);
                if ($row['DATE_UPDATE']){
                    $row['DATE_UPDATE'] = $this->DateFormatForum($row['DATE_UPDATE']);
                }

                $row['USER_STATUS'] = ($row['DATE_ACTIVE']> time()-10*60*60)? 1: 0;
                $result[] = $row;
            }
        }
        return $result;
    }

    public function GetTopicInfo($id){
        $result = array();
        $sql = "SELECT * FROM `".db_pref."forum_i` WHERE `ID` = '$id'";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
        }
        return $result;
    }

    public function GetCoockieView(){
        $array = array();
        if (isset($_COOKIE[$this->coockie_name])){
            $array = unserialize($_COOKIE[$this->coockie_name]);
        }
        return $array;
    }

    public function SetCoockieView($array){
        setcookie('tv',serialize($array),time()+3600*24*$this->view_days,'/');
    }

    public function SetView($id){
        $array = $this->GetCoockieView();
        $r = true;
        if (count($array)>0){
            foreach($array as $v){
                if ($v[0] == $id){
                    $r = false;
                    break;
                }
            }
        }
        if ($r){
            $sql = "UPDATE  `".db_pref."forum_i` SET VIEWS=VIEWS+1 WHERE `ID`=$id";
            $this->db->query($sql);
            $array[] = array($id,time());
            $array = $this->SetCoockieView($array);
        }
    }

    public function ShowMessages($id = 0){
        $this->SetView($this->tid);
        $forum_info = $this->GetForumInfo($this->cid);
        $topic_info = $this->GetTopicInfo($this->tid);

        $this->page_title = $topic_info['NAME'];
        $this->meta_title = $this->page_title . ' - ' . $forum_info['TITLE'] . ' - '.$this->config->ForumModuleTitle .' - ' . $this->config->SiteTitle;
        $this->breadcrumbs = array(
            array('text' => 'Главная', 'href' => '/'),
            array('text' => $this->config->ForumModuleTitle, 'href' => '/forum'),
            array('text' => $forum_info['TITLE'], 'href' => '/forum/cid='.$forum_info['ID']),
            array('text' => $this->page_title, 'href' => ''),
        );

        $messages = $this->GetMessages($this->tid);
        $this->assign(array(
            'site_title'       => $this->c_name.' - '. $forum_info['TITLE'].' - '. $this->config->SiteTitle,
            'page_title'       => $this->c_name,
            'messages'         => $messages,
            'cid'              => $this->cid,
            'fid'              => $this->get['fid'],
            'forum_info'       => $forum_info,
            'topic_info'       => $topic_info,
            'pagination'       => $this->pagination,
        ));
        $this->GetStat();
        $this->SetPath('forum/messages/');
        $this->content = $this->SetTemplate($this->template.'.tpl');
    }

    public function RemoveTopic($id){
        $sql = "DELETE FROM `".db_pref."forum_p` WHERE `PARENT` = $id";
        $this->db->query($sql);
        $sql = "DELETE FROM `".db_pref."forum_i` WHERE `ID` = $id";
        $this->db->query($sql);
        return true;
    }
    public function DeleteMessage(){
        if ($this->mid > 0){
            $message = $this->GetMessage($this->mid);
            if ($message['TO_TOPIC']==0){
                $sql = "DELETE FROM `".db_pref."forum_p` WHERE ID = $this->mid";
                $this->db->query($sql);
                $this->Head('/forum/cid='.$this->cid.'/tid='.$this->tid);
            } else {
                $tid = $message['PARENT'];
                $this->RemoveTopic($tid);
                $this->Head('/forum/cid='.$this->cid);
            }
        }
    }

    public function GetStat(){
        $online_time = time()-$this->online_interval*60;
        $users = array();
        $topics_count = array();
        $otv_count = array();
        $users_count = array();
        $sql = "SELECT * FROM `".db_pref."users` WHERE DATE_ACTIVE > $online_time";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $users = $this->db->fetch_all($query);
        }

        $sql = "SELECT COUNT(*) AS CNT FROM `".db_pref."forum_i`";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
            $topics_count = $result['CNT'];
        }

        $sql = "SELECT COUNT(*) AS CNT FROM `".db_pref."forum_p`";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
            $otv_count = $result['CNT'];
        }

        $sql = "SELECT COUNT(*) AS CNT  FROM `".db_pref."users`";
        $query = $this->db->query($sql);
        if ($this->db->num_rows($query) > 0){
            $result = $this->db->fetch_array($query);
            $users_count = $result['CNT'];
        }

        $this->assign(array(
            'users_online'    => $users,
            'topics_count'    => $topics_count,
            'otv_count'    => $otv_count,
            'users_count'    => $users_count,
            'show_stats'    => true,
        ));
    }
}
?>