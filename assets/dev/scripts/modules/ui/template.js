define(['underscore', 'jquery'], function() {
    var bomb = function(){
        alert('workign')
    }
    var showName = function(n) {
        var temp = _.template("Hello <%= name %>");
        $("body").html(temp({name: n}));
        alert('okay')
    };
    return {
        showName: showName
    };
});