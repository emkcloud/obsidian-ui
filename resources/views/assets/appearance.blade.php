{{-- output --}}

<script{{$nonce}}>

    window.ObsidianUIAppearance =
    {
        storage: 'ObsidianUI.appearance',

        initAppearance()
        {
            this.applyAppearance(window.localStorage.getItem(this.storage) || 'system');
        },

        applyAppearance(appearance)
        {
            const applyThemeFromAppearance = () =>
            {
                window.localStorage.setItem(this.storage, appearance);

                appearance === 'dark' ? applyThemeDark() : applyThemeLight();
            };

            const applyThemeDark = () =>
            {
                document.documentElement.classList.add('dark');
            };

            const applyThemeLight = () =>
            {
                document.documentElement.classList.remove('dark');
            };

            if (['dark', 'light'].includes(appearance))
            {
                applyThemeFromAppearance();

            } else if (appearance === 'system') {

                let media = window.matchMedia('(prefers-color-scheme: dark)');

                window.localStorage.removeItem(this.storage);

                media.matches ? applyThemeDark() : applyThemeLight();
            }
        }
    }

    window.ObsidianUIAppearance.initAppearance();

</script>