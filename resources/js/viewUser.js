const viewUser = () => {
	const showUser = document.querySelectorAll('#showUser');
	const showUserModal = document.querySelectorAll('#showUserModal');
	const closeUserModal = document.querySelectorAll('#closeUserModal');

	showUser.forEach((user, i) => {
		user.addEventListener('click', () => {
			showUserModal[i].classList.remove('hidden');
		});

		closeUserModal[i].addEventListener('click', () => {
			showUserModal[i].classList.add('hidden');
		});
	});
}

export default viewUser;