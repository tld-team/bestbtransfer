/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './blocks/**/*.php',
    './inc/*.php',
    './inc/classes/*.php',
    './template-parts/*.php',
    './*.php'
  ],
  theme: {
    extend: {
      // Boje
      colors: {
        primary: '#000000',
        body: '#4b4b4b',
        icon: '#1d4ed8',
        secondary: '#f59e0b',
        accent: '#dc2626'
      },
      fontFamily: {
        body: ['Roboto', 'sans-serif'],
        heading: ['Montserrat', 'sans-serif'],
      },

      // Veličine fontova
      fontSize: {
        'xs': ['12px', { lineHeight: '16px' }],
        'sm': ['14px', { lineHeight: '18px' }],
        'base': ['16px', { lineHeight: '20px' }],
        'lg': ['18px', { lineHeight: '22px' }],
        'xl': ['20px', { lineHeight: '22px' }],
        '2xl': ['24px', { lineHeight: '28px' }],
        '3xl': ['30px', { lineHeight: '32px' }],
        '4xl': ['45px', { lineHeight: '1.2' }],
        '5xl': ['70px', { lineHeight: '1.1' }],

        // Custom heading sizes za responsive
        'h1-mobile': ['48px', { lineHeight: '52px' }],
        'h1-tablet': ['55px', { lineHeight: '60px' }],
        'h1-desktop': ['65px', { lineHeight: '70px' }],

        'h2-mobile': ['36px', { lineHeight: '40px' }],
        'h2-tablet': ['45px', { lineHeight: '50px' }],
        'h2-desktop': ['55px', { lineHeight: '60px' }],

        'h3-mobile': ['20px', { lineHeight: '24px' }],
        'h3-tablet': ['22px', { lineHeight: '26px' }],
        'h3-desktop': ['24px', { lineHeight: '28px' }],

        'h4-mobile': ['18px', { lineHeight: '22px' }],
        'h4-tablet': ['20px', { lineHeight: '24px' }],
        'h4-desktop': ['24px', { lineHeight: '28px' }],

        'h5-mobile': ['16px', { lineHeight: '20px' }],
        'h5-tablet': ['18px', { lineHeight: '22px' }],
        'h5-desktop': ['20px', { lineHeight: '24px' }],

        'h6-mobile': ['16px', { lineHeight: '20px' }],
        'h6-tablet': ['18px', { lineHeight: '22px' }],
        'h6-desktop': ['20px', { lineHeight: '24px' }],
      },

      // Font weight
      fontWeight: {
        'normal': 400,
        'medium': 500,
        'semibold': 600,
        'bold': 700,
        'extrabold': 800,
        'black': 900,
      },

      // Spacing (razmaci)
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '128': '32rem',
        '144': '36rem',
      },

      // Border radius
      borderRadius: {
        '4xl': '2rem',
        '5xl': '2.5rem',
      },

      // Animacije
      animation: {
        'fade-in': 'fadeIn 0.5s ease-in-out',
        'slide-up': 'slideUp 0.3s ease-out',
        'pulse-slow': 'pulse 3s infinite',
      },
      backgroundImage: {
        'gradient-mma': 'linear-gradient(135deg, #1a202c 0%, #2d3748 100%)',
        'gradient-mma-light': 'linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%)',
        'gradient-stats': 'linear-gradient(90deg, rgba(26, 32, 44, 0.9) 0%, rgba(45, 55, 72, 0.7) 100%)',
        'gradient-stats-light': 'linear-gradient(90deg, rgba(248, 250, 252, 0.9) 0%, rgba(226, 232, 240, 0.7) 100%)',
        'section-divider': 'linear-gradient(90deg, transparent 0%, #e53e3e 50%, transparent 100%)',
        'section-divider-light': 'linear-gradient(90deg, transparent 0%, #dc2626 50%, transparent 100%)',
      },
      boxShadow: {
        'fighter': '0 10px 15px rgba(0, 0, 0, 0.5)',
        'fighter-light': '0 10px 15px rgba(0, 0, 0, 0.1)',
        'card': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'card-dark': '0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2)',
      },

      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(10px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [],
}