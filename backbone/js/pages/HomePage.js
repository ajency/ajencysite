define(['backbone','underscore', 'jquery', 'text!pages/templates/index.tpl'], 
		function(Backbone, _ , $, template){

			var HomePage = Backbone.View.extend({

				id 			: 'home-page',

				className 	: 'full-container accordion home-page',

				template 	: _.template(template),

				initialize : function(){

					_.bindAll(this, 'render');

					this.$el.css('width','4490px');

				},

				render : function(){

					this.$el.html(this.template);

					return this;

				}

			});

			return HomePage;
			

		});