<section class="container mt-lg-5 pt-2 pt-lg-5 position-relative">
    <video id="video-frontPage" autoplay muted loop class="w-100" poster="<?= get_field('video_poster')['url'];?>">
        <source src="<?= get_field('video')['url'];?>" type="video/mp4">
        <track src="captions_en.vtt" kind="captions" srclang="en" label="english_captions">
    </video>
    <button class="d-none grayscale-hover btn shadow-none position-absolute top-50 start-50 translate-middle text-white" id="play-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
             class="bi bi-play-circle-fill play-size" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
    </button>
</section>