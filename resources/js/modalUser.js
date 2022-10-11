const modalUser = (getBtn, getModal, close, closeBtn = null, deleteBtn = null, tableRow = null) => {
	const showUser = document.querySelectorAll(getBtn);
	const showUserModal = document.querySelectorAll(getModal);
	const closeUserModal = document.querySelectorAll(close);
	const closeBtnModal = document.querySelectorAll(closeBtn);
	const closeAfterDelete = document.querySelectorAll(deleteBtn);
	const getTableRow = document.querySelectorAll(tableRow);

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
				getTableRow[i].style.display = 'none'
				closeBtnModal[i].style.display = 'none';
				setTimeout(() => showUserModal[i].classList.add('hidden'), 3000);
			});
		}
	});
}

export default modalUser;