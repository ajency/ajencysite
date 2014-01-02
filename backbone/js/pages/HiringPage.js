define(['backbone','underscore', 'jquery', 'text!pages/templates/hiring.tpl'], 
		function(Backbone, _ , $, template){

			var HiringPage = Backbone.View.extend({

				id 			: 'hiring-page',

				className 	: 'full-container accordion hire-page',

				template 	: _.template(template),

				initialize : function(){

					_.bindAll(this, 'render');

					this.$el.css('width','6230px');

				},

				render : function(){

					this.$el.html(this.template);

					return this;

				}

			});

			return HiringPage;
			

		});