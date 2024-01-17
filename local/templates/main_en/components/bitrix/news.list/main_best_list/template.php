<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="qualities mt-section">
    <div class="container">
        <div class="qualities__inner">
            <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
                <?
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="qualities__card" data-aos="fade-up" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                    <div class="qualities__img">
                        <picture class="picture">
                            <source class="lazyload" type="image/webp" srcset="<?= $item['webp_src'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" media="(min-width: 769px)" />
                            <source class="lazyload" type="image/jpeg" srcset="<?= $item['PREVIEW_PICTURE']["SRC"] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" media="(min-width: 769px)" /><img class="picture__img lazyload" data-src="<?= $item['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" />
                        </picture>
                        <svg class="qualities__decor" width="283" viewBox="0 0 283 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_7_12" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="283">
                                <path d="M282.11 0H0V211H282.11V0Z" fill="white"></path>
                            </mask>
                            <g mask="url(#mask0_7_12)">
                                <mask id="mask1_7_12" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="283">
                                    <path d="M282.11 0H0V211H282.11V0Z" fill="white"></path>
                                </mask>
                                <g mask="url(#mask1_7_12)">
                                    <path d="M154.318 116.272C147.025 128.34 120.423 172.383 119.825 173.395C119.125 174.564 119.307 175.757 120.863 175.757C121.851 175.757 124.419 175.757 126.133 175.757C127.093 175.757 128.104 175.238 128.676 174.252C129.143 173.473 135.605 162.313 137.993 158.213C138.538 157.278 139.498 156.708 140.511 156.708C141.315 156.708 157.276 156.708 163.064 156.708C164.906 156.708 165.4 158.369 165.4 158.369C165.4 158.369 167.554 172.149 167.761 173.499C167.969 174.823 168.67 175.783 170.175 175.783C171.005 175.783 172.847 175.783 174.38 175.783C175.624 175.783 176.508 174.875 176.196 173.239C175.91 171.787 167.657 125.408 165.84 115.207C170.72 113.91 174.872 111.418 178.557 107.396C178.869 107.058 179.57 106.617 179.622 107.655C179.648 108.123 179.778 109.628 179.934 111.106C180.115 112.845 181.231 114.533 183.281 114.533C184.345 114.533 189.614 114.533 192.987 114.533C194.675 114.533 195.895 113.184 195.895 110.977C195.895 101.659 195.895 77.2117 195.895 75.1092C195.895 72.488 195.063 70.4896 191.197 70.4896C183.593 70.4896 161.118 70.4896 159.638 70.4896C157.017 70.4896 155.926 71.6575 155.926 74.4864C155.926 75.5764 155.926 79.8075 155.926 83.3109C155.926 85.5172 156.758 87.6966 159.43 87.6966C160.806 87.6966 170.849 87.6966 172.459 87.6966C173.108 87.6966 173.367 88.2163 173.289 88.45C171.498 93.926 166.697 97.0146 159.794 97.0146C148.789 97.0146 142.951 89.7216 142.951 75.784C142.951 65.3248 145.545 53.2044 158.574 53.2044C163.661 53.2044 167.346 55.1251 169.5 58.7326C170.148 59.8485 171.186 62.5219 174.327 62.5219C176.534 62.5219 185.747 62.5219 190.964 62.5219C194.337 62.5219 194.156 59.3295 193.741 57.7983C189.665 42.4078 175.262 32.6233 159.015 32.6233C135.085 32.6233 118.217 49.9344 118.217 74.5383C118.217 98.5978 132.828 115.285 154.318 116.272ZM159.768 123.409C160.806 129.897 163.634 147.493 163.764 148.299C163.92 149.285 163.35 150.114 162.181 150.114C157.406 150.114 145.078 150.114 144.403 150.114C143.547 150.114 143.132 149.232 143.65 148.35C144.066 147.649 154.343 129.819 158.08 123.357C158.885 121.93 159.535 121.93 159.768 123.409Z" fill="#E5D14C"></path>
                                    <path d="M0.181686 150.633C0.181686 166.541 9.05757 177.26 25.382 177.26C33.8686 177.26 39.7081 175.209 44.4574 170.331C44.8208 169.967 45.5475 169.499 45.5735 170.668C45.5994 171.394 45.7032 173.133 45.7552 174.379C45.807 175.184 46.3261 175.754 47.1306 175.754C47.5719 175.754 48.6619 175.754 49.5962 175.754C50.4527 175.754 51.309 175.184 51.5167 174.197C52.7884 168.124 57.408 146.064 57.6415 145.079C58.0049 143.573 57.4598 142.717 55.6692 142.717C50.0114 142.717 34.3099 142.717 33.0122 142.717C31.4291 142.717 30.6764 143.365 30.4429 144.481C30.3131 145.104 29.9757 146.584 29.7162 147.778C29.5086 148.738 29.8979 149.49 30.936 149.49C31.7925 149.49 44.0681 149.49 48.0909 149.49C49.3886 149.49 49.1549 150.294 49.0511 150.684C46.1185 161.817 40.0974 170.59 26.8613 170.59C15.1825 170.59 8.33096 163.116 8.33096 150.477C8.33096 134.853 17.103 118.865 34.5954 118.865C43.4713 118.865 48.2467 122.473 50.6083 129.792C51.0236 131.116 51.2831 132.569 52.8663 132.569C53.8525 132.569 56.0844 132.569 57.6676 132.569C59.2507 132.569 59.3285 131.141 59.2507 130.44C58.4201 122.473 53.8005 117.126 47.3123 114.298C60.8857 113.104 72.6943 106.875 72.6943 90.2655C72.6943 79.9365 67.7633 73.7332 58.7576 70.5929C64.8305 66.9855 68.7495 62.3918 68.7495 54.528C68.7495 37.996 53.567 34.5181 40.305 34.5181C40.305 34.5181 13.9109 34.5181 9.31714 34.5181C3.08839 34.4922 0 38.3333 0 42.6674C0 46.9238 0 88.9684 0 106.435C0 111.366 2.12813 114.505 7.42253 114.505C9.47277 114.505 15.1566 114.505 21.3075 114.505C8.30491 119.878 0.181686 133.087 0.181686 150.633ZM22.9684 52.7113C23.3577 52.7113 37.58 52.7113 37.58 52.7113C43.1598 52.7113 45.9108 54.7876 45.9108 58.8103C45.9108 62.5215 43.1599 64.7016 38.6699 64.7016C38.6699 64.7016 23.228 64.7016 22.9164 64.7016C22.605 64.7016 22.4234 64.494 22.4234 64.1565C22.4234 61.9246 22.4234 53.4639 22.4234 53.2044C22.4493 52.893 22.5791 52.7113 22.9684 52.7113ZM23.0722 82.8168C23.5912 82.8168 40.4607 82.8168 40.4607 82.8168C46.5337 82.8168 49.7779 85.2299 49.7779 89.6425C49.7779 94.055 46.6375 96.2868 40.4607 96.2868C40.4607 96.2868 23.5133 96.2868 23.0463 96.2868C22.5791 96.2868 22.4493 96.0532 22.4493 95.6113C22.4493 93.0425 22.4493 83.8293 22.4493 83.4923C22.4493 83.076 22.5531 82.8168 23.0722 82.8168Z" fill="#E5D14C"></path>
                                    <path d="M65.662 175.756C67.323 175.756 69.5031 175.756 70.1518 175.756C71.216 175.756 72.0205 174.925 72.3319 173.497C72.5914 172.303 76.095 155.953 77.2629 150.529C77.4966 149.439 78.2491 148.816 79.391 148.816C80.533 148.816 94.5994 148.816 94.5994 148.816C101.269 148.816 106.019 148.999 106.019 156.629C106.019 161.559 104.8 166.465 104.8 171.396C104.8 172.408 104.877 173.238 105.006 173.939C105.137 174.64 106.175 175.781 107.238 175.781C107.887 175.781 110.223 175.781 112.013 175.781C113.207 175.781 113.596 174.613 113.441 173.939C113.207 172.979 113.078 171.914 113.078 170.669C113.078 165.842 114.038 161.014 114.038 156.187C114.038 150.919 112.118 147.934 107.627 146.091C116.322 144.066 121.59 138.279 121.59 129.065C121.59 119.282 115.725 114.896 107.705 113.65C107.705 105.526 107.705 44.2505 107.705 39.2156C107.705 36.4645 106.044 34.544 102.749 34.544C98.6479 34.544 90.6026 34.544 88.0593 34.544C85.1267 34.544 83.2062 36.0752 83.2062 39.3194C83.2062 44.5619 83.2062 103.761 83.2062 113.286C81.1039 113.286 79.5727 113.286 79.1315 113.286C76.9256 113.286 76.5622 114.947 76.5622 114.947C76.5622 114.947 64.546 171.992 64.2346 173.497C63.8453 174.925 64.546 175.756 65.662 175.756ZM79.2872 140.615C80.2734 135.918 83.1542 122.343 83.31 121.644C83.4916 120.787 84.2961 120.242 85.0747 120.242C85.8533 120.242 101.088 120.242 101.088 120.242C109.964 120.242 113.39 123.745 113.39 129.558C113.39 140.537 104.773 142.198 96.0787 142.198C96.0787 142.198 81.3635 142.198 80.2995 142.198C79.2354 142.198 79.0796 141.601 79.2872 140.615Z" fill="#E5D14C"></path>
                                    <path d="M183.202 172.85C182.762 174.951 183.669 175.756 184.812 175.756C185.486 175.756 187.484 175.756 189.016 175.756C190.105 175.756 191.143 175.055 191.482 173.265C191.767 171.682 201.24 126.913 203.601 115.752C203.939 114.144 203.083 113.235 201.837 113.235C200.331 113.235 198.541 113.235 198.074 113.235C197.217 113.235 195.815 113.78 195.478 115.388C193.038 126.574 183.591 171.006 183.202 172.85Z" fill="#E5D14C"></path>
                                    <path d="M266.225 113.235C264.771 113.235 262.981 113.235 262.383 113.235C261.32 113.235 260.101 114.222 259.762 115.883C257.712 126.081 250.471 162.313 250.159 163.818C249.797 165.582 249.174 165.765 248.498 164.129C244.191 153.878 228.516 116.375 228.048 115.311C227.529 114.066 226.44 113.235 225.453 113.235C223.585 113.235 220.808 113.235 220.263 113.235C219.406 113.235 217.978 114.325 217.719 115.597C217.486 116.66 208.012 160.963 205.418 173.161C205.001 175.134 205.91 175.783 206.819 175.783C207.338 175.783 209.155 175.783 210.66 175.783C211.854 175.783 212.995 175.004 213.281 173.654C215.176 164.26 222.65 126.991 222.935 125.641C223.246 124.083 223.818 123.694 224.545 125.458C225.193 126.991 240.79 163.974 244.839 173.524C245.437 174.951 247.02 175.783 247.928 175.783C248.473 175.783 250.886 175.783 252.703 175.783C253.897 175.783 254.909 174.926 255.376 173.239C255.791 171.734 265.55 125.953 267.808 115.415C268.12 114.013 267.367 113.235 266.225 113.235Z" fill="#E5D14C"></path>
                                    <path d="M3.24367 210.871C4.15196 210.871 4.90462 210.742 4.90462 210.742C4.90462 210.742 251.664 193.846 253.247 193.716C254.831 193.586 255.142 192.834 255.142 191.796C255.142 190.758 254.207 190.16 253.455 190.16C231.526 190.16 4.82673 190.16 3.3993 190.16C1.37497 190.16 0.466683 191.198 0.466683 192.989C0.466683 193.56 0.466683 203.5 0.466683 207.809C0.440769 209.287 0.830054 210.871 3.24367 210.871Z" fill="#E5D14C"></path>
                                    <path d="M281.825 40.6689C281.773 40.5651 281.721 40.4874 281.67 40.4095L281.617 40.3575C281.617 40.3575 281.592 40.3316 281.592 40.3057C281.565 40.2537 281.539 40.2019 281.514 40.1758C280.579 38.9821 278.632 38.385 275.777 38.385C274.377 38.385 272.716 38.5408 270.899 38.8263C270.821 38.8522 270.718 38.8522 270.613 38.8783L270.431 38.9042C269.705 39.0339 269.03 39.1637 268.408 39.2935C268.2 39.3454 267.992 39.3973 267.785 39.4232L267.577 39.4751C266.98 39.6049 266.383 39.7606 265.785 39.9164C265.423 40.0202 265.033 40.124 264.644 40.2278C263.892 40.4354 263.191 40.643 262.515 40.8247C262.282 40.9026 262.048 40.9546 261.814 41.0323L261.555 41.1102C260.621 41.3957 259.765 41.6812 258.96 41.9407C258.753 42.0186 258.545 42.0964 258.338 42.1483L258.104 42.2262C257.247 42.5117 256.469 42.7972 255.717 43.0827L255.561 43.1345C255.431 43.1865 255.327 43.1345 255.275 43.0048C255.249 42.9269 255.275 42.8231 255.353 42.7452C255.378 42.7193 255.456 42.6673 255.561 42.6155C261.322 39.5011 266.461 37.8401 269.212 36.9576C269.99 36.6982 270.562 36.5165 270.873 36.3866C270.924 36.3607 270.977 36.3089 271.002 36.2569C271.029 36.2051 271.029 36.1272 271.002 36.0752C263.425 18.8422 250.163 5.70975 244.815 0.882377C244.167 0.311403 243.44 0 242.662 0C241.727 0 240.767 0.441259 239.885 1.24575C235.888 4.90526 228.154 12.5874 221.38 22.891C212.971 35.66 208.715 48.2474 208.715 60.3416C208.715 62.3141 208.845 64.3385 209.079 66.3629C209.079 66.4407 209.131 66.5186 209.234 66.5705C209.312 66.5964 209.416 66.5964 209.468 66.5445C212.089 64.8576 215.489 62.8331 219.355 60.705L219.33 60.6791C219.304 60.6532 219.304 60.6532 219.277 60.6271C219.252 60.6012 219.252 60.6012 219.226 60.5753C219.2 60.5492 219.174 60.5233 219.149 60.4974C219.122 60.4715 219.096 60.4454 219.096 60.4195C219.071 60.3936 219.044 60.3416 219.018 60.3157C218.993 60.2898 218.966 60.2378 218.94 60.2119C218.915 60.16 218.888 60.134 218.862 60.0822C218.837 60.0302 218.811 60.0043 218.785 59.9523C218.759 59.9005 218.734 59.8485 218.681 59.8226C218.656 59.7707 218.629 59.7188 218.578 59.6928C218.551 59.6409 218.5 59.589 218.473 59.5371C218.448 59.4852 218.422 59.4333 218.37 59.3814C218.344 59.3295 218.292 59.2517 218.266 59.1997C218.239 59.1479 218.214 59.0959 218.162 59.018C218.136 58.9662 218.084 58.8883 218.058 58.8104C218.033 58.7586 218.006 58.6807 217.955 58.6287C217.928 58.5508 217.877 58.4731 217.85 58.4211C217.824 58.3432 217.799 58.2914 217.772 58.2135C217.747 58.1356 217.721 58.0577 217.669 57.9799C217.643 57.9021 217.616 57.8501 217.591 57.7723C217.565 57.6944 217.538 57.5906 217.513 57.5128C217.487 57.4349 217.462 57.383 217.462 57.3051C217.435 57.2013 217.41 57.1234 217.384 57.0196C217.357 56.9418 217.357 56.8899 217.332 56.812C217.306 56.7082 217.306 56.6044 217.279 56.5006C217.279 56.4486 217.254 56.3709 217.254 56.3189C217.228 56.1892 217.228 56.0593 217.228 55.9555C217.228 55.9037 217.228 55.8517 217.228 55.7999C217.228 55.6182 217.228 55.4365 217.228 55.2548C217.306 53.7754 217.928 52.4518 218.551 51.5176C219.096 50.687 219.641 50.142 219.797 49.9862C219.823 49.9603 219.823 49.9603 219.849 49.9344C219.953 49.8565 220.056 49.8047 220.187 49.8047C220.342 49.8047 220.471 49.8824 220.549 49.9603C220.549 49.9603 220.601 50.0123 220.679 50.1161C221.147 50.687 222.808 52.8931 222.704 55.5144C222.704 55.6441 222.677 55.7738 222.677 55.9037C222.677 55.9555 222.677 55.9814 222.652 56.0334C222.652 56.1113 222.626 56.2151 222.626 56.293C222.626 56.3448 222.6 56.3968 222.6 56.4227C222.574 56.5006 222.574 56.5785 222.549 56.6564C222.549 56.7082 222.522 56.7341 222.522 56.7861C222.496 56.864 222.471 56.9418 222.444 57.0196C222.444 57.0456 222.418 57.0975 222.418 57.1234C222.393 57.2273 222.34 57.357 222.315 57.4608C222.263 57.5646 222.237 57.6685 222.185 57.7983C222.159 57.8242 222.159 57.876 222.132 57.9021C222.107 57.9799 222.081 58.0577 222.029 58.1097C222.003 58.1356 222.003 58.1876 221.977 58.2135C221.951 58.2914 221.926 58.3432 221.873 58.3952C221.848 58.4211 221.848 58.4731 221.821 58.499C221.795 58.5769 221.743 58.6287 221.717 58.7066C221.692 58.7325 221.692 58.7586 221.665 58.7845C221.614 58.8883 221.562 58.9662 221.511 59.0441C221.458 59.1218 221.406 59.2257 221.355 59.3035C221.328 59.3295 221.328 59.3555 221.302 59.3814C221.277 59.4333 221.225 59.4852 221.199 59.5371C221.172 59.5631 221.147 59.589 221.147 59.615C221.121 59.6669 221.069 59.7188 221.043 59.7707C221.016 59.7967 221.016 59.8226 220.991 59.8486C220.991 59.8745 220.965 59.8745 220.965 59.9005C223.119 58.7325 225.351 57.5646 227.583 56.4227L227.557 56.3968C227.53 56.3709 227.53 56.3448 227.505 56.3189C227.479 56.293 227.453 56.2669 227.453 56.241C227.427 56.2151 227.427 56.1892 227.402 56.1631C227.375 56.1372 227.349 56.0854 227.324 56.0593C227.297 56.0334 227.271 56.0075 227.246 55.9555C227.219 55.9037 227.193 55.8517 227.168 55.8258C227.142 55.7999 227.116 55.7479 227.09 55.722C227.038 55.6441 226.987 55.5403 226.934 55.4365C226.909 55.4105 226.909 55.3845 226.882 55.3327C226.831 55.2548 226.804 55.1769 226.753 55.0991C226.726 55.0472 226.701 55.0212 226.675 54.9693C226.648 54.8915 226.597 54.8395 226.57 54.7617C226.545 54.7098 226.519 54.6579 226.492 54.606C226.467 54.5281 226.441 54.4502 226.389 54.3984C226.364 54.3464 226.337 54.2946 226.311 54.2167C226.286 54.1388 226.259 54.0609 226.233 53.983C226.208 53.9312 226.181 53.8533 226.181 53.8015C226.155 53.7236 226.13 53.6457 226.103 53.5678C226.078 53.516 226.078 53.4381 226.052 53.3861C226.025 53.3083 226 53.2045 225.974 53.1266C225.947 53.0488 225.947 52.9969 225.922 52.919C225.896 52.8411 225.896 52.7373 225.869 52.6595C225.869 52.5816 225.844 52.5297 225.844 52.4518C225.818 52.348 225.818 52.2701 225.818 52.1663C225.818 52.0886 225.791 52.0366 225.791 51.9587C225.791 51.8549 225.791 51.7511 225.791 51.6214C225.791 51.5694 225.791 51.5176 225.791 51.4397C225.791 51.258 225.791 51.1022 225.818 50.9206C226.078 48.1436 228.309 46.0932 228.646 45.7818C228.673 45.7559 228.699 45.7559 228.699 45.73C228.802 45.6521 228.932 45.6001 229.063 45.6261C229.192 45.6261 229.322 45.7039 229.4 45.8078C229.478 45.9116 231.035 47.8322 231.269 50.2978C231.294 50.5054 231.294 50.687 231.294 50.8946C231.294 51.0763 231.294 51.258 231.269 51.4397C231.269 51.5435 231.242 51.6732 231.217 51.777C231.217 51.8031 231.217 51.8549 231.191 51.8808C231.191 51.9587 231.164 52.0366 231.139 52.0886C231.139 52.1404 231.113 52.1663 231.113 52.2183C231.086 52.2962 231.086 52.348 231.061 52.4259C231.061 52.4779 231.035 52.5038 231.035 52.5556C231.008 52.6335 231.008 52.6854 230.983 52.7633C230.983 52.7892 230.957 52.8411 230.957 52.8671C230.931 52.945 230.905 52.9969 230.88 53.0747C230.88 53.1007 230.853 53.1266 230.853 53.1526C230.827 53.2564 230.775 53.3343 230.724 53.4381C230.724 53.464 230.697 53.464 230.697 53.4899C230.671 53.5678 230.619 53.6457 230.594 53.7236C230.568 53.7495 230.568 53.7754 230.541 53.8274C230.516 53.8792 230.49 53.9571 230.438 54.0091C230.412 54.035 230.412 54.087 230.385 54.1129C230.36 54.1647 230.334 54.2167 230.282 54.2685C230.256 54.2946 230.256 54.3464 230.23 54.3725C230.204 54.4243 230.152 54.4763 230.126 54.5281C230.101 54.554 230.101 54.5801 230.074 54.606C230.048 54.6579 229.996 54.7357 229.97 54.7877C229.945 54.8136 229.945 54.8395 229.919 54.8395C229.867 54.9174 229.815 54.9953 229.764 55.0732C229.737 55.0991 229.737 55.125 229.711 55.151C229.686 55.2029 229.633 55.2548 229.608 55.3067C229.581 55.3327 229.556 55.3586 229.53 55.3845C229.503 55.4105 229.478 55.4365 229.478 55.4624C230.074 55.151 230.697 54.8656 231.32 54.554L231.398 54.5022C231.423 54.4763 231.45 54.4763 231.501 54.4502C231.657 54.3725 231.813 54.4243 231.865 54.554C231.891 54.6319 231.865 54.7357 231.762 54.8136C231.709 54.8655 231.657 54.8915 231.606 54.9174C231.579 54.9174 231.554 54.9434 231.528 54.9693C231.008 55.2548 230.516 55.5403 230.048 55.8258C230.204 55.7999 230.36 55.7738 230.516 55.7738C230.541 55.7738 230.541 55.7738 230.568 55.7738C230.775 55.7479 230.957 55.7479 231.164 55.722C231.191 55.722 231.242 55.722 231.269 55.722C231.423 55.722 231.579 55.722 231.735 55.722C231.787 55.722 231.84 55.722 231.891 55.722C232.021 55.722 232.151 55.7479 232.28 55.7479C232.332 55.7479 232.41 55.7738 232.463 55.7738C232.592 55.7999 232.695 55.7999 232.825 55.8258C232.878 55.8258 232.956 55.8517 233.007 55.8517C233.137 55.8776 233.24 55.9037 233.37 55.9296C233.423 55.9555 233.474 55.9555 233.526 55.9814C233.682 56.0334 233.863 56.0854 234.019 56.1372C236.07 56.9418 237.341 58.8104 237.886 59.7707C237.99 59.9524 238.068 60.0822 238.12 60.186C238.173 60.2898 238.198 60.3416 238.198 60.3677C238.249 60.4974 238.249 60.6271 238.198 60.757C238.146 60.8867 238.042 60.9905 237.939 61.0425C237.886 61.0684 236.356 61.6912 234.512 61.6912C233.604 61.6912 232.773 61.5356 232.021 61.2501C231.865 61.1981 231.735 61.1202 231.579 61.0425C231.579 61.0425 231.554 61.0425 231.554 61.0164C231.423 60.9387 231.294 60.8867 231.164 60.8088C231.139 60.8088 231.139 60.7829 231.113 60.7829C230.983 60.705 230.88 60.6271 230.749 60.5492C230.724 60.5492 230.724 60.5233 230.697 60.5233C230.594 60.4454 230.463 60.3677 230.36 60.2638C230.334 60.2378 230.334 60.2378 230.307 60.2119C230.204 60.134 230.101 60.0302 229.996 59.9523L229.97 59.9264C229.867 59.8226 229.764 59.7447 229.686 59.6409C229.686 59.6409 229.686 59.6409 229.659 59.615C229.452 59.4073 229.269 59.1997 229.114 58.9921C229.114 58.9921 229.114 58.9662 229.088 58.9662C229.01 58.8624 228.932 58.7845 228.855 58.6807L228.829 58.6548C228.751 58.5508 228.699 58.4731 228.646 58.3952L228.621 58.3693C228.568 58.2914 228.517 58.1876 228.465 58.1097L228.44 58.0838C228.387 58.0059 228.336 57.928 228.284 57.8501C228.284 57.8501 228.284 57.8242 228.258 57.8242C228.206 57.7463 228.18 57.6684 228.128 57.6166C228.103 57.5387 228.05 57.4868 228.025 57.4349C227.998 57.383 227.972 57.3311 227.947 57.2792V57.2532C227.92 57.2273 227.92 57.1754 227.894 57.1494C224.909 58.8883 222.704 60.2119 221.355 61.0943C221.38 61.0943 221.38 61.0943 221.406 61.0943C221.433 61.0943 221.458 61.0943 221.484 61.0684C221.588 61.0425 221.665 61.0164 221.77 61.0164C221.795 61.0164 221.795 61.0164 221.821 61.0164C221.926 60.9905 222.054 60.9646 222.185 60.9646C222.21 60.9646 222.237 60.9646 222.263 60.9387C222.393 60.9126 222.496 60.9126 222.626 60.8867H222.652C222.782 60.8608 222.911 60.8608 223.067 60.8608C223.092 60.8608 223.145 60.8608 223.17 60.8608C223.326 60.8608 223.456 60.8608 223.612 60.8608C224.52 60.8608 225.377 61.0164 226.13 61.328C226.467 61.4577 226.804 61.6394 227.09 61.821C229.036 63.0409 230.074 65.117 230.256 65.5065C230.282 65.5324 230.282 65.5583 230.282 65.5583C230.334 65.688 230.334 65.8179 230.282 65.9476C230.23 66.0774 230.126 66.1812 229.996 66.2331H229.97C229.737 66.311 228.309 66.856 226.597 66.856C225.688 66.856 224.831 66.7002 224.079 66.3888C224.002 66.3629 223.898 66.311 223.82 66.285C221.302 65.1431 220.056 62.4699 219.927 62.1844V62.1584C219.927 62.1584 219.927 62.1325 219.9 62.1325C215.748 65.117 212.348 67.946 209.805 70.5154C209.78 70.5414 209.78 70.5413 209.78 70.5674L209.753 70.5933C207.262 73.1367 205.704 75.3687 205.082 77.2119V77.2374C204.822 77.9893 204.744 78.6903 204.849 79.3389V79.3913C204.9 79.7028 205.004 80.0143 205.133 80.2735C205.912 81.7788 207.936 82.5577 211.18 82.5577C211.778 82.5577 212.452 82.5322 213.127 82.4798H213.231L213.258 82.5577C220.576 100.881 234.668 114.87 240.377 120.008C241.053 120.631 241.832 120.943 242.584 120.943C243.337 120.943 244.064 120.631 244.712 120.035C252.161 113.338 276.4 89.2275 276.4 60.4715C276.4 57.7463 276.167 54.9174 275.699 52.0625V51.9846L275.752 51.9328C278.918 48.9482 280.942 46.3528 281.748 44.2246C281.851 43.9391 281.929 43.6796 282.007 43.4461C282.24 42.4858 282.215 41.6293 281.876 40.9285C281.851 40.7209 281.825 40.695 281.825 40.6689ZM246.009 54.8915C245.984 55.0212 245.906 55.151 245.803 55.2289C245.803 55.2289 245.776 55.2289 245.75 55.2548C245.439 55.4624 243.44 56.7082 241.104 56.7082C240.741 56.7082 240.352 56.6823 240.015 56.6044C239.859 56.5785 239.729 56.5524 239.599 56.5006C239.573 56.5006 239.573 56.5006 239.548 56.4747C239.417 56.4486 239.288 56.3968 239.133 56.3448H239.106C237.263 55.696 235.939 54.2946 235.396 53.6457L235.369 53.6198C235.343 53.5937 235.318 53.5419 235.291 53.516C235.187 53.3861 235.135 53.3083 235.109 53.2823C235.057 53.2305 234.979 53.0488 234.823 52.6854C234.823 52.6854 234.823 52.6854 234.823 52.6595C234.772 52.5556 233.916 50.6092 234.097 48.4291C234.149 47.884 234.253 47.313 234.461 46.742C235.265 44.5619 237.238 43.2124 238.12 42.6934C238.146 42.6673 238.198 42.6414 238.224 42.6414C238.276 42.6155 238.354 42.5635 238.379 42.5376C238.483 42.4858 238.535 42.4597 238.561 42.4597C238.613 42.4338 238.691 42.4079 238.743 42.4079C238.821 42.4079 238.872 42.4079 238.95 42.4338C239.08 42.4858 239.184 42.5635 239.236 42.6934C239.236 42.6934 239.236 42.6934 239.236 42.7193C239.339 42.9269 239.962 44.4581 239.988 46.2749C239.988 47.0275 239.885 47.8322 239.599 48.6107C239.158 49.8306 238.327 50.7908 237.549 51.4656C238.301 51.2321 239.055 51.1022 239.754 51.0763C240.171 51.0763 240.586 51.1022 241 51.1801C241.546 51.2839 242.065 51.4656 242.531 51.6732C242.687 51.7511 242.843 51.829 242.999 51.9069C243.285 52.0625 243.571 52.2442 243.83 52.4259C245.102 53.3602 245.88 54.4243 245.931 54.4763C245.984 54.554 246.009 54.6579 246.036 54.7617C246.009 54.8395 246.009 54.8655 246.009 54.8915ZM251.201 45.0811C251.148 45.2108 250.085 48.3253 247.437 49.6748C246.502 50.142 245.413 50.3756 244.192 50.3756C242.687 50.3756 241.546 50.0123 241.493 50.0123C241.364 49.9603 241.26 49.8824 241.209 49.7527C241.156 49.623 241.131 49.4931 241.182 49.3634C241.182 49.3375 241.209 49.2855 241.26 49.1817C241.52 48.481 242.636 45.9635 244.971 44.7697C245.906 44.3025 246.996 44.0689 248.216 44.0689C249.618 44.0689 250.706 44.3803 250.889 44.4322H250.915C251.045 44.4842 251.148 44.5619 251.201 44.6918C251.252 44.7956 251.252 44.9512 251.201 45.0811Z" fill="#E5D14C"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="qualities__box">
                        <h3 class="qualities__title"><?= $item['NAME'] ?></h3>
                        <p class="qualities__text"><?= $item['PREVIEW_TEXT'] ?></p>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>