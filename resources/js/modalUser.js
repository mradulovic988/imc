const modalUser = (getBtn, getModal, close, closeBtn = null, deleteBtn = null) => {
	const showUser = document.querySelectorAll(getBtn);
	const showUserModal = document.querySelectorAll(getModal);
	const closeUserModal = document.querySelectorAll(close);
	const closeBtnModal = document.querySelectorAll(closeBtn);
	const closeAfterDelete = document.querySelectorAll(deleteBtn);

	showUser.forEach((user, i) => {
		user.addEventListener('click', () => {
			showUserModal[i].classList.remove('hidden');
		});

		closeUserModal[i].addEventListener('click', () => {
			showUserModal[i].classList.add('hidden');
		});

		if (closeBtnModal[i]) {
			closeBtnModal[i].addEventListener('click', () => {
				showUserModal[i].classList.add('hidden');
			});
		}

		if (closeAfterDelete[i]) {
			closeAfterDelete[i].addEventListener('click', () => {
				showUserModal[i].classList.add('hidden');
			});
		}
	});
}

export default modalUser;