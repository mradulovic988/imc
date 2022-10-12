import './bootstrap';
import Alpine from 'alpinejs';
import modalUser from './modalUser';

window.Alpine = Alpine;

Alpine.start();

modalUser('#showUser', '#showUserModal', '#closeUserModal');
modalUser('#deleteUser', '#deleteUserModal', '#closeDeleteModal', '#closeBtnDelete', '#afterDeleteBtn', '#userTableRow');