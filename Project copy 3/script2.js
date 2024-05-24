//bootstrap 4 dropdown select
$(function(){
    $(".dropdown-menu").on('click', 'a', function(){
        $(this).parents('.dropdown').find('button').text($(this).text());
    });
 });
//printThis.js documentation
$(document).ready(function(){
    $('#print-this').click(function(){
        $('#content').printThis({
            importCSS: true,
            header: "<h1> AbilityNet Headline Accessiblity Review</h1>",
            pageTitle: " Headline Review </title>"
        });

    });

}); 