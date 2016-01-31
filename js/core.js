// Measure viewport and subtract the height the navigation tabs, then resize the iframes.
function resizeIframe(){
    var newSize = $(window).height() - $('nav').height();
    $('iframe').css({ 'height': newSize + 'px', width: '100%' });
}

var MANAGETHIS = {
    index: {
        init: function() {
            $.getJSON('./config.json', function(data){
                data.services.forEach(function(service){
                    if(service.url){
                        var selected = data.services.indexOf(service) === 0 ? 'class="selected"' : '';
                        var tab = '';
                            tab += '<li><a data-content="' + service.name + '" ' + selected + 'href="#">';
                            tab += '<span class="' + service.icons.nav + '"></span> ' + service.name + '</a></li>';
                        $('.cd-tabs-navigation').append($(tab));
                        $('.cd-tabs-content').append($('<li data-content="' + service.name + '" ' + selected + '><iframe></iframe></li>'));
                        var iframe = document.querySelector('li[data-content="' + service.name + '"] iframe');
                        var html = '';
                            html += '<link rel="stylesheet" href="./css/vender.min.css">';
                            html += '<link rel="stylesheet" href="./css/iframe.css">';
                            html += '<div class="login"><div class="heading">';
                            html += '<h2><span class="' + service.icons.landingpage + '"></span></h2>';
                            html += '<form action="' + service.url + '">';
                            html += '<button type="submit" onclick="location.href=\"' + service.url + '\";" class="float">Launch</button>';
                            html += '</form></div></div>';
                        iframe.width = '100%';
                        iframe.height = $(window).height() - $('nav').height();
                        iframe.scrolling = 'auto';
                        iframe.style = 'width:100%; height:1046px';
                        iframe.contentWindow.document.open();
                        iframe.contentWindow.document.write(html);
                        iframe.contentWindow.document.close();
                    }
					else if(service.frameurl){
                        var selected = data.services.indexOf(service) === 0 ? 'class="selected"' : '';
                        var tab = '';
                            tab += '<li><a data-content="' + service.name + '" ' + selected + 'href="#">';
                            tab += '<span class="' + service.icons.nav + '"></span> ' + service.name + '</a></li>';
                        $('.cd-tabs-navigation').append($(tab));
 						
						var tab = '';
							tab += '<li data-content="' + service.name + '" ' + selected + '><iframe scrolling=auto src="' + service.frameurl + '" style="width:100%; height:1046px"></iframe></li>'
                        $('.cd-tabs-content').append($(tab));	
                    }
					else if(service.dirurl){
                        var selected = data.services.indexOf(service) === 0 ? 'class="selected"' : '';
                        var tab = '';
                            tab += '<li><a href="#" onclick="window.open(\'' + service.dirurl + '\',\'_blank\')">';
                            tab += '<span class="' + service.icons.nav + '"></span> ' + service.name + '</a></li>';
                        $('.cd-tabs-navigation').append($(tab));
                    }
					else if(service.dropdownframe){
               		    var selected = data.services.indexOf(service) === 0 ? 'class="selected"' : '';					
                        var tab = '';
                            tab += '<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">';
                            tab += '<span class="' + service.icons.nav + '"></span> ' + service.name + '<b class="caret"></b></a>';
							tab += '<ul class="dropdown-menu">';	

						for (i = 1; i < service.menuItemCount + 1; i++) {
							tab += '<li><a data-content="' + eval('service.menuItemContentName' + i); 
							tab += '" href="#0"><span class="fa fa-square"></span> ' + eval('service.menuItemName' + i) + '</a></li>';
						}
						
							tab += '</ul></li>';
                        $('.cd-tabs-navigation').append($(tab));
						
						var tab = '';
						
						for (i = 1; i < service.menuItemCount + 1; i++) {
                            tab += '<li data-content="' + eval('service.menuItemContentName' + i) + '"><iframe scrolling=auto src="' + eval('service.menuItemFrameurl' + i);
							tab += '" style="width:100%; height:1046px"></iframe></li>'
						}
						
                        $('.cd-tabs-content').append($(tab));	
					}
					else if(service.dropdowndir){
               		    var selected = data.services.indexOf(service) === 0 ? 'class="selected"' : '';					
                        var tab = '';
                            tab += '<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">';
                            tab += '<span class="' + service.icons.nav + '"></span> ' + service.name + '<b class="caret"></b></a>';
							tab += '<ul class="dropdown-menu">';	

						for (i = 1; i < service.menuItemCount + 1; i++) {
							tab += '<li><a href="#" onclick="window.open(\'' + eval('service.menuItemDirurl' + i) + '\',\'_blank\')">'; 
							tab += '<span class="fa fa-square"></span> ' + eval('service.menuItemName' + i) + '</a></li>';
						}
						
							tab += '</ul></li>';
                        $('.cd-tabs-navigation').append($(tab));
					}			
                });
            });
        },
        common: function(){
            var tabs = $('.cd-tabs');

            tabs.each(function(){
                var tab = $(this),
                    tabItems = tab.find('ul.cd-tabs-navigation'),
                    tabContentWrapper = tab.children('ul.cd-tabs-content'),
                    tabNavigation = tab.find('nav');

                tabItems.on('click', 'a', function(event){
                    event.preventDefault();
                    var selectedItem = $(this);
                    if(!selectedItem.hasClass('selected')) {
                        var selectedTab = selectedItem.data('content'),
                            selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
                            slectedContentHeight = selectedContent.innerHeight();

                        selectedItem.dblclick(function() {
                            selectedContent.children('iframe').attr('src', selectedContent.children('iframe').attr('src'));
                        });

                        tabItems.find('a.selected').removeClass('selected');
                        selectedItem.addClass('selected');
                        selectedContent.addClass('selected').siblings('li').removeClass('selected');
                        //animate tabContentWrapper height when content changes
                        tabContentWrapper.animate({
                            'height': slectedContentHeight
                        }, 200);
                    }
                });

                //hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
                checkScrolling(tabNavigation);
                tabNavigation.on('scroll', function(){
                    checkScrolling($(this));
                });
            });

            $(window).on('resize', function(){
                tabs.each(function(){
                    var tab = $(this);
                    checkScrolling(tab.find('nav'));
                    tab.find('.cd-tabs-content').css('height', 'auto');
                });
                resizeIframe(); // Resize iframes when window is resized.
            });

            function checkScrolling(tabs){
                var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation').width()),
                     tabsViewport = parseInt(tabs.width());
                if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
                    tabs.parent('.cd-tabs').addClass('is-ended');
                } else {
                    tabs.parent('.cd-tabs').removeClass('is-ended');
                }
            }
        }
    }
};


var UTIL = {
    exec: function(controller, action) {
        var ns = MANAGETHIS;
        action = (action === undefined) ? "init" : action;

        if (controller !== "" && ns[controller] && typeof ns[controller][action] === "function") {
            ns[controller][action]();
        }
    },
    init: function() {
        var body = document.body,
        controller = body.getAttribute("data-controller"),
        action = body.getAttribute("data-action");

        UTIL.exec("common");
        UTIL.exec(controller);
        UTIL.exec(controller, action);
    }
};
if (navigator.userAgent.indexOf('PhantomJS') === -1) {
    $(document).ready(UTIL.init);
}
