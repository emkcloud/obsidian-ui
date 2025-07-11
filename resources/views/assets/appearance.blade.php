{{-- output --}}

<script{{$nonce}}>

    window.ObsidianUIAppearance =
    {
        STORAGE_KEY: 'ObsidianUI.appearance',

        initAppearance()
        {
            this.applyAppearance(window.localStorage.getItem(this.STORAGE_KEY) || 'system');
        },

        applyAppearance(appearance)
        {
            const applyThemeFromAppearance = () =>
            {
                window.localStorage.setItem(this.STORAGE_KEY, appearance);

                appearance === 'dark' ? applyThemeDark() : applyThemeLight();
            };

            const applyThemeDark = () =>
            {
                document.documentElement.classList.add('dark');

                applyThemeGenerateEvent('dark');
            };

            const applyThemeLight = () =>
            {
                document.documentElement.classList.remove('dark');

                applyThemeGenerateEvent('light');
            };

            const applyThemeGenerateEvent = (theme) =>
            {
                window.dispatchEvent(new CustomEvent('obsidianui:appearance',
                {
                    detail: { theme: theme, appearance: appearance }
                }));
            };

            if (['dark', 'light'].includes(appearance))
            {
                applyThemeFromAppearance();

            } else if (appearance === 'system') {

                let media = window.matchMedia('(prefers-color-scheme: dark)');

                window.localStorage.removeItem(this.STORAGE_KEY);

                media.matches ? applyThemeDark() : applyThemeLight();
            }
        }
    }

    window.ObsidianUIAppearance.initAppearance();

</script>