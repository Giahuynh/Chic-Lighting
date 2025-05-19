/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      keyframes: {
        'border-spin': {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
        zoomSlowIn: {
          '0%': { transform: 'scale(0.8)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        zoomSlowOut: {
          '0%': { transform: 'scale(1)', opacity: '1' },
          '100%': { transform: 'scale(0.85)', opacity: '0' },
        },
        fadeScaleIn: {
          '0%': { transform: 'scale(0.95)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        fadeScaleOut: {
          '0%': { transform: 'scale(1)', opacity: '1' },
          '100%': { transform: 'scale(0.95)', opacity: '0' },
        },
      },
      animation: {
        'border-spin': 'border-spin 2s linear infinite',
        'zoom-slow-in': 'zoomSlowIn 0.8s ease-out forwards',
        'zoom-slow-out': 'zoomSlowOut 0.6s ease-in forwards',
        'fade-scale-in': 'fadeScaleIn 0.7s ease-out forwards',
        'fade-scale-out': 'fadeScaleOut 0.6s ease-in forwards',
      },
    },
  },
  plugins: [],
}
