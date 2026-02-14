import asyncio
from playwright.async_api import async_playwright
import os

async def main():
    async with async_playwright() as p:
        browser = await p.chromium.launch()
        page = await browser.new_page(viewport={'width': 1200, 'height': 900})
        await page.goto(f'file://{os.getcwd()}/screenshot_gen.html')
        await page.screenshot(path='wp-content/themes/isoft-revive/screenshot.png')
        await browser.close()

if __name__ == '__main__':
    asyncio.run(main())
