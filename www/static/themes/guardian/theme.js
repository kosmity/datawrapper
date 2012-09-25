(function(){

    // Guardian Theme
    // -------------

    // Every theme will inherit the properties of this
    // theme. They can override everything or just a bit
    // of them. Also, every theme can extend any other
    // existing theme.

    Datawrapper.Themes.Guardian = _.extend({}, Datawrapper.Themes.Base, {

        colors: {
            main: '#98BCDB',
            highlight: '#004A83',
            focus: '#004A83',
            context: '#aaa',
            axis: '#000000',
            grid: '#999999',
            negative: '#F27F6D',
            background: '#ffffff',
            'highlight-negative': '#801100'
        },

        locale: 'en_UK',

        lineChart: {
            strokeWidth: {
                highlight: 2,
                normal: 1
            },
            hoverDotRadius: 4,
            maxLabelWidth: 80
        }

    });

}).call(this);