// script.js
document.addEventListener('DOMContentLoaded', () => {
    // Form validation for all forms
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                validateForm(form);
            });
        }
    });

    // User details page edit functionality
    const editButton = document.getElementById('editButton');
    const saveButton = document.getElementById('saveButton');
    const userDetailsForm = document.getElementById('userDetailsForm');

    if (editButton && saveButton && userDetailsForm) {
        editButton.addEventListener('click', () => {
            const inputs = userDetailsForm.querySelectorAll('input[readonly]');
            inputs.forEach(input => input.removeAttribute('readonly'));
            editButton.style.display = 'none';
            saveButton.style.display = 'block';
        });

        saveButton.addEventListener('click', (e) => {
            e.preventDefault();
            const inputs = userDetailsForm.querySelectorAll('input');
            inputs.forEach(input => input.setAttribute('readonly', true));
            editButton.style.display = 'block';
            saveButton.style.display = 'none';
            alert('Thông tin đã được lưu');
        });
    }

    // User list page pagination and delete functionality
    const userTableBody = document.getElementById('userTableBody');
    const prevPageBtn = document.getElementById('prevPage');
    const nextPageBtn = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');

    if (userTableBody) {
        const deleteButtons = userTableBody.querySelectorAll('.delete-user');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                if (confirm('Bạn có chắc chắn muốn xóa user này?')) {
                    const row = btn.closest('tr');
                    row.remove();
                }
            });
        });
    }

    // Form validation function
    function validateForm(form) {
        const inputs = form.querySelectorAll('input[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = '';
            }
        });

        // Special validations for specific forms
        if (form.id === 'registerForm' || form.id === 'forgotPasswordForm') {
            const password = form.querySelector('#password');
            const confirmPassword = form.querySelector('#confirm-password');

            if (password && confirmPassword && password.value !== confirmPassword.value) {
                isValid = false;
                confirmPassword.style.borderColor = 'red';
                alert('Mật khẩu không khớp');
            }
        }

        if (isValid) {
            alert('Thao tác thành công');
            // In a real app, you would handle form submission here
        }
    }
});