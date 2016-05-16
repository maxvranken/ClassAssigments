/* ---------------------------------------------------- APP ---------------------------------- */
/*$("li").click(function(){ 								// make sure we can click on an element
    $(this).toggleClass("done","prior-high"); 						// when we click on any list item, add the class done if it doesn't exist yet on the element or remove it when it exists
});*/

$("#todo-item1").click(function(){ // make sure we can click on an element
    $(this).toggleClass("done"); 						
});
$("#add-item-text").keyup(function(e){ 					
	if(e.which === 13)
	{
		// this is the ENTER key with code 13
		var todoInput = $(this).val();
        console.log(todoInput)
		var list = document.createElement("li");			
		list.innerHTML = todoInput;						// put some text inside of the <li> tags
		list.className = "prior-high";					// give it the class prior-high by default

		$(this).val(""); 								// clear the input field by setting the value to ""

		$("#todo-list").prepend(list); 					// add the newly created list item to the ul#todo-list
		$(list).click(function(){							// make sure that we can click on the newly created list item
			$(this).toggleClass("done"); 				// toggle the class done when clicking on the element
		});
	}
});