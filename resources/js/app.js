// import './bootstrap';

$(document).ready(function () {
    $('.togglePassword').click(function () {
        const type = $(this).siblings().attr('type') === 'password' ? 'text' : 'password';
        $(this).siblings().attr('type', type);

        if (type === 'password') {
            // $(this).children().attr('src', "{{ asset('assets/icons/actionable/eye.svg') }}");
            $(this).children().remove();
            $(this).append(`<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M16.227 12C16.227 13.98 14.627 15.58 12.647 15.58C10.667 15.58 9.06703 13.98 9.06703 12C9.06703 10.02 10.667 8.42 12.647 8.42C14.627 8.42 16.227 10.02 16.227 12Z"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M12.647 20.27C16.177 20.27 19.467 18.19 21.757 14.59C22.657 13.18 22.657 10.81 21.757 9.4C19.467 5.8 16.177 3.72 12.647 3.72C9.11703 3.72 5.82703 5.8 3.53703 9.4C2.63703 10.81 2.63703 13.18 3.53703 14.59C5.82703 18.19 9.11703 20.27 12.647 20.27Z"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>`);
        } else {
            $(this).children().remove();
            $(this).append(`<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
            d="M15.177 9.47L10.117 14.53C9.46703 13.88 9.06703 12.99 9.06703 12C9.06703 10.02 10.667 8.42 12.647 8.42C13.637 8.42 14.527 8.82 15.177 9.47Z"
            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path
            d="M18.467 5.77C16.717 4.45 14.717 3.73 12.647 3.73C9.11703 3.73 5.82703 5.81 3.53703 9.41C2.63703 10.82 2.63703 13.19 3.53703 14.6C4.32703 15.84 5.24703 16.91 6.24703 17.77"
            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path
            d="M9.06703 19.53C10.207 20.01 11.417 20.27 12.647 20.27C16.177 20.27 19.467 18.19 21.757 14.59C22.657 13.18 22.657 10.81 21.757 9.4C21.427 8.88 21.067 8.39 20.697 7.93"
            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M16.157 12.7C15.897 14.11 14.747 15.26 13.337 15.52" stroke-width="1.5"
            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M10.117 14.53L2.64703 22" stroke-width="1.5" stroke-miterlimit="10"
            stroke-linecap="round" stroke-linejoin="round" />
        <path d="M22.647 2L15.177 9.47" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>`);
            // $(this).children().attr('src', "{{ asset('assets/icons/actionable/eye-slash.svg') }}");
        }

    });

    console.log('halo');

    $('#closeFlash').click(function (e) { 
        console.log(this);
        $(this).parent().remove();
    });
});