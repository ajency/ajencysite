/**
 * configure require
 *
 * @param {type} param
 */
var _urlArg = "ver=" + (location.host === 'localhost' ? (new Date()).getTime() : '1.0'); //to avoid file caching

require.config({
    urlArgs : _urlArg,
    baseUrl: 'js/',
    paths: {
        underscore      : 'underscore',
        backbone        : 'backbone',
        jquery          : 'jquery',
        mousewheel      : 'jquery.mousewheel',
        metrojs         : 'MetroJs',
        matchmedia      : 'matchmedia',
        picturefill     : 'picturefill',
        mscrollbar      : 'jquery.mCustomScrollbar.concat.min',
        marionette      : 'backbone.marionette',

        //pages
        homepage        : 'pages/HomePage',
        hiring          : 'pages/HiringPage',
        casestudypage   : 'pages/CaseStudyPage',

        //templates
        homepagetemplate: 'text!pages/templates/index.tpl'
    },
    waitSeconds: 15,
    shim: {
        'backbone': {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        },
        'underscore': {
            exports: '_'
        },
        'mousewheel': {
            deps : ['jquery']
        },
        'mscrollbar' : {
            deps : ['jquery']
        },
        'metrojs' : {
            deps : ['jquery']
        },
        'holder' : {
            deps : ['jquery'],
            exports : 'Holder'
        },
        'cssFx' : {
            deps : ['jquery'],
            exports : 'cssFx'
        },
        'jqueryui' : {
            deps : ['jquery']    
        },
        'bootstrap' : {
            deps : ['jquery']    
        },
        'bootstrapselect' : {
            deps : ['bootstrap']
        },
        'ckeditor' : {
            exports : 'CKEDITOR'
        },
        'marionette' : {
            deps : ['backbone'],
            exports : 'Marionette'
        }
    }
});

function log(object){
    console.log(object);
}


//init the app
require(['backbone','marionette',
         'routers/SiteRouter'], function( Backbone, Marionette ,SiteRouter) {

        $(document).ready(function(){   

            AjencySite = new Backbone.Marionette.Application();

            //set view manager for globally accessible views
            AjencySite.ViewManager = new Backbone.ChildViewContainer();

            AjencySite.addInitializer(function(options){
                new SiteRouter();
                Backbone.history.start();
            });

            AjencySite.start();
        });

});