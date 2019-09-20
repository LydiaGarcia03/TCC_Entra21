function toggleSideBar(){
	var profile_img = window.document.getElementById('profile_img');
	if(profile_img.classList.contains('d-inline')){
		profile_img.addClass('d-none');
	} else{
		profile_img.addClass('d-inline');
	}
}
function agendaAppears(){
	var tr = windows.document.querySelector('.table_row');

	tr.className('d-none');

}