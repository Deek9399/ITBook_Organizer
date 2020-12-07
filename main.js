


	function abc(){	
		var search=$("#b").val();
      	var x = document.getElementById("section_result"); 
      	x.style.display="block";



		if(search=='')
		{
			alert("Please enter something");
		}
		else{
			var url='';
			var img='';
			var title='';
			var author='';
			var url1='';
				
			$.get("https://www.googleapis.com/books/v1/volumes?q="+search,function(response){
				for(i=0;i<response.items.length;i++)
				{
					 title=$('<h5>'+response.items[i].volumeInfo.title+'</h5>');
					 
					 img=$('<img id="dynamic"><br><a href='+response.items[i].volumeInfo.infoLink+'><button id="imagebutton">Read More</button></a>');
					 url=response.items[i].volumeInfo.imageLinks.thumbnail;
					 url1=$('<h5>'+response.items[i].volumeInfo.imageLinks.thumbnail+'</h5>');
					 img.attr('src',url);
					 title.appendTo("#result");
					 img.appendTo("#result");
					 url1.appendTo("#result");


				}



