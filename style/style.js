/*global document, alert, console*/
/*eslint no-console: 0*/
/*eslint no-unused-vars: 0*/
/*jslint devel: true*/
/*jslint browser: true*/
/*jslint node: true */
"use strict"; // required by jslint


$("#works>.row>.column>p").hide();

$("#works>.row>.column>img").on("click", function(){
    
        //alert("You clicked a question!");
        
        // $(this).next().show(); 
        
        //$(this).next().toggle();
        
        $(this).next().slideToggle();
    $(this).addClass("open");
        
        //(this).toggleClass("open");
        
        //$(this).toggleClass("open").next().slideToggle();
        
    });
    

$(".menu").hide();
$(".cross").hide();
    
    $(".hamburger").click(function() {
  $(this).hide();
  $('.cross').show();
  $(".menu").slideToggle();
});
$(".cross").click(function() {
  $(this).hide();
  $('.hamburger').show();
  $(".menu").slideToggle();
});
    

    
