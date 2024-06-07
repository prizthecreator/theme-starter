const theme_starter_colors = {
  gray: {
    50: '#f9fafb',
    100: '#f3f4f6',
    200: '#e5e7eb',
    300: '#d1d5db',
    400: '#9ca3af',
    500: '#6b7280',
    600: '#4b5563',
    700: '#374151',
    800: '#1f2937',
    900: '#111827',
  },

  red: {
    50: '#faf0f5',
    100: '#f5e1ea',
    200: '#e6b8ca',
    300: '#d490a5',
    400: '#b54e61',
    500: '#951d20',
    600: '#85171a',
    700: '#6e0f12',
    800: '#590a0c',
    900: '#420607',
    950: '#2b0303',
  },

  orange: {
    50: '#fcf8f2',
    100: '#faf2e6',
    200: '#f5dec4',
    300: '#f0c8a3',
    400: '#e39162',
    500: '#d75428',
    600: '#c24621',
    700: '#a13416',
    800: '#80250e',
    900: '#611909',
    950: '#3d0d04',
  },

  yellow: {
    50: '#fefae8',
    100: '#fff4c2',
    200: '#ffe689',
    300: '#ffcc33',
    400: '#fdb912',
    500: '#ec9f06',
    600: '#cc7902',
    700: '#a35405',
    800: '#86420d',
    900: '#723611',
    950: '#431a05',
  },

  green: {
    50: '#f4f9f7',
    100: '#d9eee7',
    200: '#b3dccf',
    300: '#86c2b2',
    400: '#5da493',
    500: '#43897a',
    600: '#336e61',
    700: '#2c5950',
    800: '#274842',
    900: '#26413c',
    950: '#102320',
  },

  blue: {
    50: '#ebf2f5',
    100: '#d8e5eb',
    200: '#a3becc',
    300: '#7698ad',
    400: '#315370',
    500: '#0a1c32',
    600: '#08192e',
    700: '#061326',
    800: '#040e1f',
    900: '#020917',
    950: '#01050f',
  },

  indigo: {
    50: '#eef2ff',
    100: '#e0e7ff',
    200: '#c7d2fe',
    300: '#a5b4fc',
    400: '#818cf8',
    500: '#6366f1',
    600: '#4f46e5',
    700: '#4338ca',
    800: '#3730a3',
    900: '#312e81',
  },

  purple: {
    50: '#f5f3ff',
    100: '#ede9fe',
    200: '#ddd6fe',
    300: '#c4b5fd',
    400: '#a78bfa',
    500: '#8b5cf6',
    600: '#7c3aed',
    700: '#6d28d9',
    800: '#5b21b6',
    900: '#4c1d95',
  },

  pink: {
    50: '#fdf2f8',
    100: '#fce7f3',
    200: '#fbcfe8',
    300: '#f9a8d4',
    400: '#f472b6',
    500: '#ec4899',
    600: '#db2777',
    700: '#be185d',
    800: '#9d174d',
    900: '#831843',
  },
}

// const theme_starter_fonts = {}

// const theme_starter_backgrounds = {}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,js,cjs,php}',
    './src/**/*.{html,js,cjs,php}',
    './template-parts/**/*.{html,js,cjs,php}',
  ],
  safelist: [
    'lg:top-10',
    'lg:top-2',
    'lg:top-3/4',
    'lg:top-4/5',
    'lg:-left-10',
    'lg:-right-10',
    'lg:-right-16',
  ],
  theme: {
    extend: {
      colors: theme_starter_colors, //<-- Use the theme_starter_colors for colors
      // fontFamily: theme_starter_fonts, //<-- Use the theme_starter_fonts for fonts,
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/container-queries'),
  ],
}
