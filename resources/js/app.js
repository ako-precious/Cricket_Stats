import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import '../css/app.css'

//  Nucleo Icons
import "../css/nucleo-icons.css" 
import "../css/nucleo-svg.css"

// <!-- Main Styling -->
import "../css/argon-dashboard-tailwind.css?v=1.0.1" 

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})