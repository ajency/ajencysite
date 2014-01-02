define(['backbone','underscore', 'jquery','homepage',
		'mousewheel','metrojs','matchmedia','picturefill','mscrollbar'],

		function(Backbone, _ , $, HomePage){

			var SiteRouter = Backbone.Router.extend({

				initialize : function(){

				},

				routes : {
					''			: 'index',
					'hiring'	: 'hiring',
					'case-study/:project' : 'caseStudies'
				},

				/**
				 * CAse study page
				 * @return {[type]}
				 */
				caseStudies : function(project){
					var pageView = AjencySite.ViewManager.findByCustom('case-study-' + project);
					var self = this;
					if(_.isUndefined(pageView)){
						require(['casestudypage'], function(View){
							pageView = new View();
							pageView.render(project);
							$('.main-content').empty().html(pageView.$el);
							AjencySite.ViewManager.add(pageView,'case-study-' + project);
							self.bindEvents();
						});
					}
					else{
						pageView.render();
						$('.main-content').empty().html(pageView.$el);
						self.bindEvents();
					}
				},

				/**
				 * Hiring page
				 * @return {[type]}
				 */
				hiring : function(){
					this.showPage('hiring');
				},

				/**
				 * Home page Page
				 * @return {[type]}
				 */
				index : function(){

					this.showPage('homepage');
					
				},

				showPage : function(page){

					var pageView = AjencySite.ViewManager.findByCustom(page);
					var self = this;
					if(_.isUndefined(pageView)){
						require([page], function(View){
							pageView = new View();
							pageView.render();
							$('.main-content').empty().html(pageView.$el);
							AjencySite.ViewManager.add(pageView,page);
							self.bindEvents();
						});
					}
					else{
						pageView.render();
						$('.main-content').empty().html(pageView.$el);
						self.bindEvents();
					}
				},

				bindEvents : function(){

					//mousewheel event listener
					$('html, body, *').mousewheel(function(e, delta) {
         				this.scrollLeft -= (delta * 80);
         				e.preventDefault();
         			});

         			//scroll event listener
         			$('.scroll-right').click(function() { // bind an event handler to the click event
	         			//$('.main-content').scrollLeft( $('.main-content').scrollLeft() + 100 ); // fast scroll
	         			$('.main-content').animate({ // smooth scroll
	         				scrollLeft: $('.main-content').scrollLeft() + 400
	         			})
	         			$('.log .left').text( $('.main-content').scrollLeft() );
	         		});
	         	 
	         		$('.scroll-left').click(function() { // bind an event handler to the click event
	         			//$('.main-content').scrollLeft( $('.main-content').scrollLeft() - 100 ); // fast scroll
	         			$('.main-content').animate({ // smooth scroll
	         				scrollLeft: $('.main-content').scrollLeft() - 400
	         			})
	         			$('.log .left').text( $('.main-content').scrollLeft() );
	         		});

	         		//listen to key press events
	         		$(document).keydown(function(e){
		         		if (e.keyCode == 37) { 
		         			$('.main-content').animate({ // smooth scroll
		         				scrollLeft: $('.main-content').scrollLeft() - 400
		         			})
		         			$('.log .left').text( $('.main-content').scrollLeft() );
		         		}
		         		if (e.keyCode == 39) { 
		         			 $('.main-content').animate({ // smooth scroll
		         				scrollLeft: $('.main-content').scrollLeft() + 400
		         			})
		         			$('.log .left').text( $('.main-content').scrollLeft() );
		         		}
		         	});

		         	//window resize events
		         	this.windowsize = $(window).width();

					$(window).resize(function () {
					    this.windowsize = $(window).width();
					});

					if (this.windowsize < 350) {
					    $(".live-tile, .flip-list").not("").liveTile();
					    $('[class^=live-tile]').removeClass();
					}

					$(".scroll-content").mCustomScrollbar();
					
					$(window).scroll(function () {
					    if ($(this).scrollTop() > 100) {
					        $('.scrollup').fadeIn();
					    } else {
					        $('.scrollup').fadeOut();
					    }
					});

					$('.scrollup').click(function () {
					    $("html, body").animate({
					        scrollTop: 0
					    }, 600);
					    return false;
					});

					$(".live-tile, .flip-list").not(".exclude").liveTile();

				}


			});

			return SiteRouter;
			

		});