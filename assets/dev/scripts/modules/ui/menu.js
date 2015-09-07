window.onload = function(){

    function MenuBox(){

        this.active = false;
        this.element = document.getElementById("menuBox");
        this.collections = {
            links: this.element.getElementsByTagName('a'),
            navbar :  document.getElementById("swNavBar").getElementsByTagName('a'),
            stage :  document.getElementById("stage").getElementsByTagName('a'),
            assist: document.getElementById("skip-link").getElementsByTagName('a')
        };

        this.toggler = $('.menuToggler');
        this.initClick =  function(){
            var self = this;

            this.toggler.click(function(e){
                e.preventDefault();
                self.toggleMenu();
            });

            $(function() {
                //Enable swiping...
                $("#mask").swipe( {
                    //Generic swipe handler for all directions
                    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
                        ///$(this).text("You swiped " + direction );
                        if(direction == 'left' && self.active ){
                            self.toggleMenu();
                            //alert('swiped: ' + direction)
                        }
                    },
                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                    threshold:0
                });
            });

        };

        this.toggleMenu = function(){
            if(this.active){
                // close the menu
                this.moveMenuBox('-320px');

                //hide the mask
                this.toggleMask('none');

                // Put the focus back on the menu toggler and
                // Kill the tabability of the menu links.
                this.removeFocus();

            }else{
                // Open the menu
                this.moveMenuBox('0px');

                //show the mask
                this.toggleMask('block');

                // Set the first element in menu to focused
                this.setFocused();
            }
            this.active = !this.active;
        };

        this.toggleMask = function(val){
            console.log(val);
          $('#mask').css({ 'display': val})
        };

        this.moveMenuBox = function(val){
            var self = this;
            $(self.element).animate({
                left: val
            });
        };

        this.removeFocus = function(){
            this.toggleTabIndex(this.collections.links, '-1');
            this.enablePageLinks();
            this.toggler.focus();
        };

        this.setFocused = function(){
            var collection = this.collections.links;
            this.toggleTabIndex(collection, '1');
            collection[0].focus();
            this.disablePageLinks();

        };

        this.enablePageLinks = function(){
            this.toggleTabIndex(this.collections.navbar, '1');
            this.toggleTabIndex(this.collections.stage, '1');
            this.toggleTabIndex(this.collections.assist, '1');
        };

        this.disablePageLinks = function(){
            this.toggleTabIndex(this.collections.navbar, '-1');
            this.toggleTabIndex(this.collections.stage, '-1');
            this.toggleTabIndex(this.collections.assist, '-1');
        };

        this.toggleTabIndex = function(collection, val){
            var count = collection.length;
            for(var i= 0; i<count; i++){
                collection[i].tabIndex = val;
            }
        };

    }

    var menuBox = new MenuBox();

    menuBox.initClick();





};


