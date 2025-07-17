// Dynamically updates CSS variables with the header's height and width
// Ensures sticky elements below can adjust based on actual header size

Alpine.data('obsidianui_header',()=>(
{
    init()
    {
        this.update();
        this.observe();
    },

    observe()
    {
        new ResizeObserver(this.update.bind(this)).observe(this.$root);
    },

    update()
    {
        document.documentElement.style.setProperty('--obsidian-utility-header-height', this.$root.offsetHeight + 'px');
        document.documentElement.style.setProperty('--obsidian-utility-header-width' , this.$root.offsetWidth  + 'px');
    }
}));

// Alpine.js component to copy plain text from a code block.
// Shows a temporary confirmation icon on successful copy.

Alpine.data('obsidianui_code',()=>(
{
    copied: false,

    getCode()
    {
        return this.$refs.code;
    },

    getCodeText()
    {
        return this.getCode().innerText;
    },

    copy()
    {
        navigator.clipboard.writeText(this.getCodeText()).then(() =>
        {
            this.copied = true; setTimeout(() => this.copied = false, 1000);

        }).catch(() => console.log("Copy failed"));
    }
}));