import './overlay-block.scss';
import register from 'ShopUi/app/registry';
export default register(
    'overlay-block',
    () =>
        import(
            /* webpackMode: "lazy" */
            /* webpackChunkName: "overlay-block" */
            './overlay-block'
        ),
);
