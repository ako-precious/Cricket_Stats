import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import "../css/app.css";

//  Nucleo Icons
import "../css/nucleo-icons.css";
import "../css/nucleo-svg.css";

//  Main Styling
import "../css/argon-dashboard-tailwind.css";

// plugin for charts
import "./js/plugins/chartjs.min.js";

//  plugin for scrollbar
import "./js/plugins/perfect-scrollbar.min.js";


/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

/* import specific icons */
import { faBaseball, faBaseballBatBall, faClose, faGear, faHouse, faUserSecret} from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */
library.add(faUserSecret, faHouse, faGear, faClose,faBaseballBatBall, faBaseball );

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("font-awesome-icon", FontAwesomeIcon)
            .mount(el);
    },
});
