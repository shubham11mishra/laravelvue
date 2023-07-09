import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from './Shared/Layout';
createInertiaApp({
    resolve: async name => {
        let page =  (await import(`./Pages/${name}`)).default;
        page.layout ??= Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },


})
