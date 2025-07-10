<style{{$nonce}}>
    :root.dark { color-scheme: dark; }
</style>

<script{{$nonce}}>

    window.ObsidianUI =
    {
        applyAppearance(appearance)
        {
            const applyThemeFromAppearance = () =>
            {
                window.localStorage.setItem('ObsidianUI.appearance', appearance);

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

                window.localStorage.removeItem('ObsidianUI.appearance');

                media.matches ? applyThemeDark() : applyThemeLight();
            }
        }
    }

    window.ObsidianUI.applyAppearance(window.localStorage.getItem('ObsidianUI.appearance') || 'system');

</script>