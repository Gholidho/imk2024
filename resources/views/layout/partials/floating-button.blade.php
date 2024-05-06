<style>
    /* Bootstrap css */
    @import "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css";

    /* Propeller typography */
    @import "https://opensource.propeller.in/components/typography/css/typography.css";

    /* Propeller buttons */
    @import "https://opensource.propeller.in/components/button/css/button.css";

    /* Propeller icons */
    @import "https://fonts.googleapis.com/icon?family=Material+Icons";
    @import "https://opensource.propeller.in/components/icons/css/google-icons.css";

    /* Propeller css for Floating Action Button*/
    .pmd-floating-action {
        bottom: 0;
        position: fixed;
        margin: 1em;
        left: 0;
        z-index: 1000;
    }

    .pmd-floating-action-btn {
        display: block;
        position: relative;
        transition: all .2s ease-out;
    }

    .pmd-floating-action-btn:before {
        bottom: 10%;
        content: attr(data-title);
        opacity: 0;
        position: absolute;
        right: 100%;
        transition: all .2s ease-out .5s;
        white-space: nowrap;
        background-color: #fff;
        padding: 6px 12px;
        border-radius: 2px;
        color: #333;
        font-size: 12px;
        margin-right: 5px;
        display: inline-block;
        box-shadow: 0px 2px 3px -2px rgba(0, 0, 0, 0.18), 0px 2px 2px -7px rgba(0, 0, 0, 0.15);
    }

    .pmd-floating-action-btn:last-child:before {
        font-size: 14px;
        bottom: 25%;
    }

    .pmd-floating-action-btn:active,
    .pmd-floating-action-btn:focus,
    .pmd-floating-action-btn:hover {
        box-shadow: 0px 5px 11px -2px rgba(0, 0, 0, 0.18), 0px 4px 12px -7px rgba(0, 0, 0, 0.15);
    }

    .pmd-floating-action-btn:not(:last-child) {
        opacity: 0;
        -ms-transform: translateY(20px) scale(0.3);
        transform: translateY(20px) scale(0.3);
        margin-bottom: 15px;
        margin-left: 8px;
        position: absolute;
        bottom: 0;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(1) {
        transition-delay: 50ms;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(2) {
        transition-delay: 100ms;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(3) {
        transition-delay: 150ms;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(4) {
        transition-delay: 200ms;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(5) {
        transition-delay: 250ms;
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(6) {
        transition-delay: 300ms;
    }

    .pmd-floating-action:hover .pmd-floating-action-btn,
    .menu--floating--open .pmd-floating-action-btn {
        opacity: 1;
        -ms-transform: none;
        transform: none;
        position: relative;
        bottom: auto;
    }

    .pmd-floating-action:hover .pmd-floating-action-btn:before,
    .menu--floating--open .pmd-floating-action-btn:before {
        opacity: 1;
    }

    .pmd-floating-hidden {
        display: none;
    }

    .pmd-floating-action-btn.btn:hover {
        overflow: visible;
    }

    .pmd-floating-action-btn .ink {
        width: 50px;
        height: 50px;
    }
</style>

<!-- Floating Action Button like Google Material -->
<div class="menu pmd-floating-action" role="navigation">
    <a href="javascript:void(0);"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Supervisor Account">
        <span class="pmd-floating-hidden">Supervisor Account</span>
        <i class="material-icons">supervisor_account</i>
    </a>
    <a href="javascript:void(0);"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Cloud Queue">
        <span class="pmd-floating-hidden">Cloud Queue</span>
        <i class="material-icons">cloud_queue</i>
    </a>
    <a href="javascript:void(0);"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Headset">
        <span class="pmd-floating-hidden">Headset</span>
        <i class="material-icons">headset</i>
    </a>
    <a href="javascript:void(0);"
        class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default"
        data-title="Dialpad">
        <span class="pmd-floating-hidden">Dialpad</span>
        <i class="material-icons">dialpad</i>
    </a>
    <a class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" data-title="Add"
        href="javascript:void(0);">
        <span class="pmd-floating-hidden">Primary</span>
        <i class="material-icons pmd-sm">help</i>
    </a>
</div>