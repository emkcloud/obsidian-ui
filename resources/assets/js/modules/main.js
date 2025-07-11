// Main class for managing the ObsidianUI package
// with AlpineJS and Laravel Livewire integration.

const ObsidianUI = new Proxy(
{
    dark: false,

    appearance: 'system',

    storage: 'ObsidianUI.appearance',

    init()
    {
        this.dark = document.documentElement.classList.contains('dark');
        this.appearance = window.localStorage.getItem(this.storage) || 'system';
    },

    setAppearance(value)
    {
        this.appearance = value;

        if (value === 'dark'  ) this.setDark(true);
        if (value === 'light' ) this.setDark(false);
        if (value === 'system') this.setAppearanceSystem();
    },

    setAppearanceSystem()
    {
        let media = window.matchMedia('(prefers-color-scheme: dark)');

        media.matches ? this.setDark(true) : this.setDark(false);

        window.localStorage.removeItem(this.storage);
    },

    setDark(value)
    {
        this.dark = value;

        document.documentElement.classList.toggle('dark', value);

        window.localStorage.setItem(this.storage, this.dark ? 'dark' : 'light');
    }

},{
    get(target, prop)
    {
        return typeof target[prop] === 'function'
            ? target[prop].bind(target)
            : target[prop];
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