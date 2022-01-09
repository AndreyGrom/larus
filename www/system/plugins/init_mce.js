$(document).ready(function(){
    function myCustomOnInit() {
        $("#mceu_50-40").attr("data-mce-color", '#854040');
        $("#mceu_50-40").data("mce-color", '#854040');
        alert($("#mceu_50-40").attr("data-mce-color"));
    }
    tinymce.init({
        selector:'.textarea-edit',
        language : 'ru',
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern responsivefilemanager"
        ],
        extended_valid_elements : 'embed[param|src|type|width|height|flashvars|wmode|allowscriptaccess|allowfullscreen],iframe[src|style|width|height|scrolling|marginwidth|marginheight|frameborder],div[*],p[*],span[*],i[*],a[*],object[width|height|classid|codebase|embed|param],param[name|value]',
        media_strict: false,
        menubar : true,
        global_xss_filtering:true,
        relative_urls : false,
        document_base_url : "/",
        /*fontsize_formats: "8pt 9pt 10pt 11pt 12pt 26pt 36pt",*/
        toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect |  forecolor backcolor | bullist numlist | outdent indent blockquote | link unlink anchor image media code | preview ",
        image_advtab: true ,

        external_filemanager_path:"/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
        // init_instance_callback : myCustomOnInit
        //theme_advanced_text_colors : "FFFFFF,000000"
        // textcolor_map: [
        //     'D7C0D0', 'color1',
        //     'F7C7DB', 'color2',
        // ]
    });

});
