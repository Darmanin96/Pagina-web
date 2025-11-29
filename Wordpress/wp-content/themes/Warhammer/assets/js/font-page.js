function video_scroll(){
        document.addEventListener('DOMContentLoaded', function() {
            console.log("Script loaded");
            const video = document.querySelector('#Warhammer-40k');
            if (video) {
                window.addEventListener('scroll', function() {
                    const scrollPosition = window.scrollY;
                    const videoHeight = window.innerHeight;

                    if (scrollPosition > videoHeight * 0.3) {
                        const opacity = 1 - (scrollPosition - videoHeight * 0.3) / (videoHeight * 0.7);
                        video.style.opacity = Math.max(opacity, 0);
                    } else {
                        video.style.opacity = 1;
                    }
                });
            }
        });
}

function abrirPanelCaos($faccion){
    

}