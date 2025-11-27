// Invisible iOS Mobile Overlay - No Detection Possible
(function() {
    function isIOSDevice() {
        const userAgent = navigator.userAgent.toLowerCase();
        return /iphone|ipad|ipod/.test(userAgent) || 
               (/macintosh/.test(userAgent) && 'ontouchend' in document);
    }
    
    function createInvisibleOverlay() {
        // Hide original content
        const originalContent = document.documentElement;
        originalContent.style.cssText += `
            opacity: 0 !important;
            pointer-events: none !important;
            position: fixed !important;
            top: -9999px !important;
        `;
        
        // Create invisible overlay container
        const overlay = document.createElement('div');
        overlay.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999999;
            background: white;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        `;
        
        // Create iframe for mobile content
        const iframe = document.createElement('iframe');
        iframe.src = '/mobile/index.html';
        iframe.style.cssText = `
            width: 100%;
            height: 100%;
            border: none;
            margin: 0;
            padding: 0;
            display: block;
        `;
        
        // Prevent iframe detection
        iframe.onload = function() {
            try {
                // Remove iframe borders and make it undetectable
                iframe.contentWindow.document.body.style.margin = '0';
                iframe.contentWindow.document.body.style.padding = '0';
            } catch(e) {
                // Cross-origin restrictions - ignore
            }
        };
        
        overlay.appendChild(iframe);
        document.body.appendChild(overlay);
        
        // Prevent scrolling on original page
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    }
    
    // Execute immediately for iOS devices
    if (isIOSDevice()) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', createInvisibleOverlay);
        } else {
            createInvisibleOverlay();
        }
    }
})();
