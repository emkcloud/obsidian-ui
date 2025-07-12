// Main class for managing the ObsidianUI package
// with AlpineJS and Laravel Livewire integration.

const ObsidianUI = new Proxy(
{
    dark: false,

    appearance: 'system',

    storage: 'ObsidianUI.appearance',

    init()
    {
        this.dark = this.checkAppearanceClass();
        this.appearance = this.getAppearanceStorage();
    },

    checkAppearanceClass()
    {
        return document.documentElement.classList.contains('dark');
    },

    getAppearance()
    {
        return this.appearance;
    },

    getAppearanceMode()
    {
        return this.dark ? 'dark' : 'light';
    },

    getAppearanceStorage()
    {
        return window.localStorage.getItem(this.storage) || 'system';
    },

    setAppearance(value)
    {
        let generateEvent = (this.appearance != value);

        this.appearance = value;

        if (value === 'dark'  ) this.setDark(true);
        if (value === 'light' ) this.setDark(false);
        if (value === 'system') this.setAppearanceSystem();

        if (generateEvent) this.setGenerateEvent();
    },

    setAppearanceSystem()
    {
        let media = window.matchMedia('(prefers-color-scheme: dark)');

        media.matches ? this.setDark(true) : this.setDark(false);

        window.localStorage.removeItem(this.storage);
    },

    setDark(value)
    {
        let generateEvent = (this.dark != value);

        this.dark = value;

        document.documentElement.classList.toggle('dark', value);

        window.localStorage.setItem(this.storage, this.getAppearanceMode());

        if (generateEvent) this.setGenerateEvent();
    },

    setGenerateEvent()
    {
        window.dispatchEvent(new CustomEvent('obsidianui:appearance',
        {
            detail: { theme: this.getAppearanceMode(), appearance: this.getAppearance() }
        }));
    }

},{
    get(target, prop)
    {
        return typeof target[prop] === 'function'
            ? target[prop].bind(target) : target[prop];
    },
  
    set(target, prop, value)
    {
        if (prop === 'dark') target.setDark(value);
        if (prop === 'appearance') target.setAppearance(value);
      
        return true;
    }
});

// Main class for managing the ObsidianUI package
// with AlpineJS and Laravel Livewire integration.

window.ObsidianUI = ObsidianUI;

// Initialize for managing the ObsidianUI package
// with AlpineJS and Laravel Livewire integration.

window.ObsidianUI.init();

// Checks if dark mode is enabled when the blade directive
// @obsidianUIAppearance is present in HEAD section theme.

document.addEventListener('livewire:navigated', () =>
{
    if (window.ObsidianUIAppearance?.initAppearance)
    {
        window.ObsidianUIAppearance.initAppearance();
    }
})

// Listen the custom 'obsidianui:appearance' event dispatched.
// Retrieves theme and appearance when the event is triggered.

window.addEventListener('obsidianui:appearance', function(event)
{
    const { theme, appearance } = event.detail;
});

// Listens system theme changes and updates appearance
// and the current appearance mode is set to 'system'.

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) =>
{
    if (window.ObsidianUIAppearance?.initAppearance)
    {
        if (window.ObsidianUI.getAppearanceStorage() == 'system')
        {
            window.ObsidianUI.setAppearance('system');
        }
    }

    window.ObsidianUI.init();
});