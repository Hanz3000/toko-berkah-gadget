document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById("sidebarToggle");
    const sidebar = document.getElementById("sidebar");

    // Toggle sidebar visibility
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener("click", function () {
            sidebar.classList.toggle("-translate-x-full");
        });
    }

    // Toast notification system
    window.showToast = function (message, type = "success") {
        const toastContainer = document.getElementById("toastContainer");

        if (!toastContainer) return;

        // Create toast element
        const toast = document.createElement("div");
        toast.className =
            "toast-enter flex items-center p-4 rounded-lg shadow-lg max-w-md";

        // Set color based on type
        const colorClasses = {
            success: "bg-green-600 text-white",
            error: "bg-red-600 text-white",
            warning: "bg-amber-500 text-white",
            info: "bg-blue-600 text-white",
            delete: "bg-red-600 text-white",
        };
        toast.classList.add(...colorClasses[type].split(" "));

        // Icon based on type
        const icons = {
            success: "fa-check-circle",
            error: "fa-times-circle",
            warning: "fa-exclamation-triangle",
            info: "fa-info-circle",
            delete: "fa-trash-alt",
        };

        // Create toast content
        toast.innerHTML = `
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <div class="bg-white bg-opacity-20 p-2 rounded-lg mr-3">
                        <i class="fas ${icons[type]}"></i>
                    </div>
                    <div>
                        <p class="font-medium">${message}</p>
                    </div>
                </div>
                <button class="text-white focus:outline-none toast-close ml-3">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

        // Add toast to container
        toastContainer.appendChild(toast);

        // Remove toast after 5 seconds
        setTimeout(() => {
            toast.classList.remove("toast-enter");
            toast.classList.add("toast-exit");
            setTimeout(() => {
                toast.remove();
            }, 500);
        }, 5000);

        // Close button functionality
        const closeButton = toast.querySelector(".toast-close");
        closeButton.addEventListener("click", () => {
            toast.classList.remove("toast-enter");
            toast.classList.add("toast-exit");
            setTimeout(() => {
                toast.remove();
            }, 500);
        });
    };

    // Delete confirmation handling
    const deleteForms = document.querySelectorAll(".delete-form");
    deleteForms.forEach((form) => {
        form.addEventListener("submit", function (e) {
            const btn = this.querySelector('button[type="submit"]');
            const productName = btn.getAttribute("data-name") || "this item";
            const confirmText = `Are you sure you want to delete ${productName}?`;

            if (!confirm(confirmText)) {
                e.preventDefault();
                return false;
            }

            // Optional: disable the button to prevent multiple submissions
            btn.disabled = true;
            btn.innerHTML = "Deleting...";

            return true;
        });
    });
});
