<section class="tabs">
    <div @click="show('vCard')" :class="tabs.vCard.class" class="tab tab-1">
      <span>
        <img src="assets/images/tabs-icons/v-card.svg" alt="">
      </span>
      <p>
        Vcard
      </p>
    </div>
    <div @click="show('url')" :class="tabs.url.class" class="tab tab-2">
      <span>
        <img src="assets/images/tabs-icons/url.svg" alt="">
      </span>
      <p>
        URL
      </p>
    </div>
    <div @click="show('website')" :class="tabs.website.class" class="tab tab-3">
      <span>
        <img src="assets/images/tabs-icons/website.svg" alt="">
      </span>
      <p>
        Website
      </p>
    </div>
    <!-- <div @click="show('event')" :class="tabs.event.class" class="tab tab-4">
      <span>
        <img src="assets/images/tabs-icons/event.svg" alt="">
      </span>
      <p>
        Event
      </p>
    </div> -->
    <div @click="show('pdf')" :class="tabs.pdf.class" class="tab tab-5">
      <span>
        <img src="assets/images/tabs-icons/pdf.svg" alt="">
      </span>
      <p>
        PDF
      </p>
    </div>
    <!-- <div @click="show('bitcoin')" :class="tabs.bitcoin.class" class="tab tab-6">
      <span>
        <img src="assets/images/tabs-icons/bitcoin.svg" alt="">
      </span>
      <p>
        Bitcion
      </p>
    </div> -->
    <div @click="show('rating')" :class="tabs.rating.class" class="tab tab-7">
      <span>
        <img src="assets/images/tabs-icons/rating.svg" alt="">
      </span>
      <p>
        Rating
      </p>
    </div>
    <!-- <div @click="show('socialmedia')" :class="tabs.socialmedia.class" class="tab tab-8">
      <span>
        <img src="assets/images/tabs-icons/sm.svg" alt="">
      </span>
      <p>
        Social Media
      </p>
    </div> -->
    <div @click="show('googlereview')" :class="tabs.googlereview.class" class="tab tab-9">
      <span>
        <img src="assets/images/tabs-icons/google-review.svg" alt="">
      </span>
      <p>
        Google Review
      </p>
    </div>
    <!-- <div @click="show('more')" :class="tabs.more.class" class="tab tab-10">
      <span>
        <img src="assets/images/tabs-icons/more.svg" alt="">
      </span>
      <p>
        More
      </p>
    </div> -->
  </section>