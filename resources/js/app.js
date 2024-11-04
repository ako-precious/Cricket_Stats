import { createApp, h } from "vue";
import { Ziggy } from './ziggy';
import { route as ziggyRoute } from 'ziggy-js';
import { createInertiaApp } from "@inertiajs/vue3";
import "../css/app.css";
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faBaseball, faBaseballBatBall, faClose, faEye, faGear, faHouse, faPeopleGroup, faPerson, faUserSecret } from "@fortawesome/free-solid-svg-icons";

library.add(faUserSecret, faHouse, faGear, faClose, faBaseballBatBall, faBaseball, faEye, faPeopleGroup, faPerson);

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        // Provide route globally within Vue’s context
        app.provide('route', (name, params, absolute) => ziggyRoute(name, params, absolute, Ziggy));

        app
            .use(plugin)
            .component("font-awesome-icon", FontAwesomeIcon)
            .mount(el);
    },
});
