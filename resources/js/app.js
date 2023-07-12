import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue';
createInertiaApp({
    resolve: async name => {
        let page = (await import(`./Pages/${name}`)).default;
        if(page.layout === undefined){
            page.layout =  Layout;
        }
        
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
    title: title =>  title + 'Laravel Vue'


})
