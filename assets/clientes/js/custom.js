$(function(){"use strict";$(function(){$(".preloader").fadeOut()});var i=function(){var i=window.innerWidth>0?window.innerWidth:this.screen.width,e=70;1170>i?($("body").addClass("mini-sidebar"),$(".navbar-brand span").hide(),$(".scroll-sidebar, .slimScrollDiv").css("overflow-x","visible").parent().css("overflow","visible"),$(".sidebartoggler i").addClass("ti-menu")):($("body").removeClass("mini-sidebar"),$(".navbar-brand span").show());var a=(window.innerHeight>0?window.innerHeight:this.screen.height)-1;a-=e,1>a&&(a=1),a>e&&$(".page-wrapper").css("min-height",a+"px")};$(window).ready(i),$(window).on("resize",i),$(".fix-header .topbar").stick_in_parent({}),$(".nav-toggler").click(function(){$("body").toggleClass("show-sidebar"),$(".nav-toggler i").toggleClass("ti-menu"),$(".nav-toggler i").addClass("ti-close")}),$(".sidebartoggler").on("click",function(){}),$(".search-box a, .search-box .app-search .srh-btn").on("click",function(){$(".app-search").toggle(200)}),$(function(){for(var i=window.location,e=$("ul#sidebarnav a").filter(function(){return this.href==i}).addClass("active").parent().addClass("active");;){if(!e.is("li"))break;e=e.parent().addClass("in").parent().addClass("active")}}),$(function(){$('[data-toggle="tooltip"]').tooltip()}),$(function(){$("#sidebarnav").metisMenu()}),$(".scroll-sidebar").slimScroll({position:"left",size:"5px",height:"100%",color:"#dcdcdc"}),$("body").trigger("resize")});