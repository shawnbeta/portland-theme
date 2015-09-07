require.config({
    paths: {
        "jquery": "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min",
        "underscore": "contrib/underscorevv"
    }
});

require(['ui/template'], function(template) {
    template.boom();
});

