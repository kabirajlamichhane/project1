function validation()
 {
	var title =document.getElementById('title').value;
	var content =CKEDITOR.instances.content.getdata();
	if(title == "" || content == "")
	{
		alert('title is mandatory');
		alert('content is mandatory');
		return false;
	}
}

