define(['backbone','underscore', 'jquery', 'text!pages/templates/hiring.tpl'], 
		function(Backbone, _ , $, template){

			var CaseStudyPage = Backbone.View.extend({

				id 			: 'casestudy-page',

				className 	: 'full-container accordion casestudy-page',

				template 	: _.template(template),

				initialize : function(){

					_.bindAll(this, 'render');

					this.$el.css('width','6230px');

				},

				render : function(project){

					var self = this;

					require(['text!pages/templates/casestudy/'+ project + '.tpl'], function(ProjectTemplate){

						self.$el.html(_.template(ProjectTemplate));

					});
					return this;

				}

			});

			return CaseStudyPage;
			

		});