<div class="infinite-marquee">
    <div class="marquee-content">
        <label class="custom-moveing" style="color:#fff; font-weight: 400; font-size:20px;">
           + ******  "Code Cracking Chaos" Ben, TripAdvisor + ******  "Brilliant Fun for all the Family" Mark, Google Review + ****** "Great host & Fab Experience" Rebecca, TripAdvisor + ***** "Brilliant introduction to Escape Rooms!" Russ, Facebook 
        </label>
    </div>
    <div class="marquee-content" aria-hidden="true">
        <label style="color:#fff; font-weight: 400; font-size:20px;">
            + ******  "Code Cracking Chaos" Ben, TripAdvisor + ******  "Brilliant Fun for all the Family" Mark, Google Review + ****** "Great host & Fab Experience" Rebecca, TripAdvisor + ***** "Brilliant introduction to Escape Rooms!" Russ, Facebook 
        </label>
    </div>
</div>

<style>
.custom-moving {
    font-family: "Poppin", sans-serif !important;
}
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
    box-sizing: border-box;
    background: transparent; /* Change as needed */
}

.marquee-content {
    display: inline-block;
    animation: marquee 30s linear infinite;
    padding-right: 10px; /* Adjust spacing between copies */
}

.marquee-content label {
    font-family: 'Futura PT Medium';
    display: inline-block;
    padding-right: 50px; /* Adjust spacing between items */
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>