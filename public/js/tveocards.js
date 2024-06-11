document.querySelector("#app").innerHTML = `
    <div id="info">
      <div id="name-wrapper">

      </div>
    </div>
    <ul id="cards"></ul>
`;

const CARDS = [
    "http://tveo.ddns.net/images/programas/caraacara.jpg",
    "http://tveo.ddns.net/images/programas/elsemaforo.jpg",
    "http://tveo.ddns.net/images/programas/linaresgol.jpg",
    "http://tveo.ddns.net/images/programas/offtherecord.jpg",
    "http://tveo.ddns.net/images/programas/segundoaviso.jpg",
    "http://tveo.ddns.net/images/programas/sexometro.webp",
];

const INFO_CONTAINER = document.querySelector("#info");
const CARD_CONTAINER = document.querySelector("#cards");

const PADDING = 4;

// Add prepadding
for (let pre = 0; pre < PADDING; pre++) {
    const COVER_INDEX = CARDS.length - (PADDING - 1) + pre;

    const ITEM = Object.assign(document.createElement("li"), {
        ariaHidden: true,
        innerHTML: `
      <div class="image-wrapper">
        <img src="${CARDS[COVER_INDEX - 1]}" alt="" />
      </div>
    `,
    });
    CARD_CONTAINER?.appendChild(ITEM);
}

CARDS.map((card) => {
    const ITEM = Object.assign(document.createElement("li"), {
        innerHTML: `
      <div class="image-wrapper">
        <img src="${card}" alt="" />
      </div>
    `,
    });
    CARD_CONTAINER?.appendChild(ITEM);
});

// Add post padding
for (let post = 0; post < PADDING; post++) {
    const COVER_INDEX = post;
    const ITEM = Object.assign(document.createElement("li"), {
        ariaHidden: true,
        innerHTML: `
      <div class="image-wrapper">
        <img src="${CARDS[COVER_INDEX]}" alt="" />
      </div>
    `,
    });
    CARD_CONTAINER?.appendChild(ITEM);
}

const ITEMS = [...CARD_CONTAINER?.children];

ITEMS.forEach((ITEM, index) => {
    if (index <= 2 || index >= ITEMS.length - 4)
        ITEM.setAttribute("aria-hidden", true);
});

let scrollBounds = { max: 0, min: 0 };

const UPDATE = () => {
    if (CARD_CONTAINER.scrollLeft < scrollBounds.min) {
        CARD_CONTAINER.scrollLeft = scrollBounds.max;
    } else if (CARD_CONTAINER.scrollLeft > scrollBounds.max) {
        CARD_CONTAINER.scrollLeft = scrollBounds.min;
    }
};

const UPDATE2 = (e) => {
    switch (e.key) {
        case "ArrowLeft": {
            console.log(e.key);
            CARD_CONTAINER.scrollLeft -= 100;
            if (CARD_CONTAINER.scrollLeft < scrollBounds.min) {
                CARD_CONTAINER.scrollLeft = scrollBounds.max;
            } else if (CARD_CONTAINER.scrollLeft > scrollBounds.max) {
                CARD_CONTAINER.scrollLeft = scrollBounds.min;
            }
            break;
        }
        case "ArrowRight": {
            console.log(e.key);
            CARD_CONTAINER.scrollLeft += 100;
            if (CARD_CONTAINER.scrollLeft < scrollBounds.min) {
                CARD_CONTAINER.scrollLeft = scrollBounds.max;
            } else if (CARD_CONTAINER.scrollLeft > scrollBounds.max) {
                CARD_CONTAINER.scrollLeft = scrollBounds.min;
            }
            break;
        }
    }
};

const SET_SCROLL_BOUNDS = () => {
    ITEMS[ITEMS.length - 1].scrollIntoView();
    scrollBounds.max = CARD_CONTAINER.scrollLeft + ITEMS[0].offsetWidth;
    ITEMS[0].scrollIntoView();
    scrollBounds.min = CARD_CONTAINER.scrollLeft - ITEMS[0].offsetWidth;
};

SET_SCROLL_BOUNDS();

CARD_CONTAINER?.addEventListener("scroll", UPDATE);
document.addEventListener("keydown", UPDATE2);
