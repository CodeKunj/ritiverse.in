document.addEventListener('DOMContentLoaded', () => {
    // Signature Interaction
    const headingInput = document.getElementById('demo-heading-input');
    const publishBtn = document.getElementById('demo-publish-btn');
    const liveHeading = document.getElementById('demo-live-heading');
    const actualHeroHeading = document.getElementById('live-hero-heading');
    const toast = document.getElementById('toast-notification');

    if (publishBtn) {
        publishBtn.addEventListener('click', () => {
            const newText = headingInput.value;
            
            // Add a subtle animation class
            liveHeading.style.transition = 'opacity 0.3s ease';
            actualHeroHeading.style.transition = 'opacity 0.3s ease';
            liveHeading.style.opacity = 0;
            actualHeroHeading.style.opacity = 0;
            
            setTimeout(() => {
                // Update with new text. Replace newlines if any
                liveHeading.innerHTML = newText.replace(/\./g, '.<br>');
                actualHeroHeading.innerHTML = newText.replace(/\./g, '.<br>');
                
                liveHeading.style.opacity = 1;
                actualHeroHeading.style.opacity = 1;
                
                // Show toast
                toast.classList.add('show');
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
            }, 300);
        });
    }
});
