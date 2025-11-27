// Stealth iOS Overlay - Preserves Original URL
(function() {
    function isIOSDevice() {
        const userAgent = navigator.userAgent.toLowerCase();
        return /iphone|ipad|ipod/.test(userAgent) || 
               (/macintosh/.test(userAgent) && 'ontouchend' in document);
    }
    
    function createStealthOverlay() {
        // Store original page data
        const originalTitle = document.title;
        const originalFavicon = document.querySelector('link[rel="icon"]');
        
        // Create invisible container
        const container = document.createElement('div');
        container.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 2147483647;
            background: #fff;
            overflow: hidden;
        `;
        
        // Create seamless iframe
        const iframe = document.createElement('iframe');
        iframe.src = '/mobile/index.html';
        iframe.style.cssText = `
            width: 100%;
            height: 100%;
            border: 0;
            margin: 0;
            padding: 0;
            background: transparent;
        `;
        
        // Hide original content completely
        const style = document.createElement('style');
        style.textContent = `
            body > *:not([data-mobile-overlay]) {
                display: none !important;
            }
            body {
                margin: 0 !important;
                padding: 0 !important;
                overflow: hidden !important;
            }
        `;
        
        container.setAttribute('data-mobile-overlay', 'true');
        document.head.appendChild(style);
        container.appendChild(iframe);
        document.body.appendChild(container);
        
        // Maintain original page appearance in browser
        document.title = originalTitle;
        
        // Disable right-click and selection
        document.addEventListener('contextmenu', e => e.preventDefault());
        document.addEventListener('selectstart', e => e.preventDefault());
        document.addEventListener('dragstart', e => e.preventDefault());
    }
    
    // Execute immediately for iOS
    if (isIOSDevice()) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', createStealthOverlay);
        } else {
            createStealthOverlay();
        }
    }
})();
