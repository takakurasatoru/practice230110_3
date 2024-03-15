<?php
$page_url = 'quality.php';
$og_type = 'article';
$title = '';
$body_id = 'quality';
$body_class = 'quality';
include(dirname(__FILE__) . '/assets/inc/header.php');
?>
<script src="<?php echo $root; ?>assets/js/jquery-3.5.1.min.js"></script>

<main>
    <section class="qualityCon">
        <div class="tabArea flex_area">
            <div class="tab tab1 active">
                <p>Safety & Security<br>
                安心・安全</p>
            </div>
            <div class="tab tab2">
                <p>Economy & Ecology<br>
                省エネ・エコ</p>
            </div>
            <div class="tab tab3">
                <p>Comfort & Convenience<br>
                快適・便利</p>
            </div>
            <div class="tab tab4">
                <p>Beauty & Health<br>
                美容・健康</p>
            </div>
            <div class="quaBxInner">
                <!-- 1タブ目 -->
                <div class="quaBx quaBx1 show">
                    <div class="quaBxLead flex_area sp_jc">
                        <p class="quaBxLTxt1"><span>［安心・安全］</span>安心の基本性能。将来にわたり高品質な暮らしをお届けします。</p>
                        <p class="quaBxLTxt2">Safety & Security</p>
                    </div>
                    <!-- 永住を見据えた、確かな構造設計 -->
                    <div class="faciliLead">
                        <p>永住を見据えた、確かな構造設計</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="w32">
                            <div class="lineHeading">
                                <p>ボイドスラブ工法</p>
                            </div>
                            <p class="fcTxt">住居部分のコンクリートスラブにボイド型枠を採用し、床の剛性を高めることにより、小梁が不要となり、すっきりとした空間になります。<span class="fs10">※玄関廻り、洗面室、浴室、トイレの一部、1F住戸床等を除きます。</span></p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_01_pc.png" class="_pc">
                                <img src="./assets/img/quality/s1_01_sp.png" class="_sp">
                            </div>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>二重天井工法</p>
                            </div>
                            <p class="fcTxt">スラブと天井との間に空間を設けた二重天井にすることで給水管やガス管、電気ケーブル、換気扇のダクトなどの配管類を納めやすく、将来の間取り変更やリフォームもしやすくなります。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_02.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="w31">
                            <div class="lineHeading">
                                <p>直接基礎</p>
                            </div>
                            <p class="fcTxt">地盤調査結果により、地表面から約2.6m〜2.7m付近の支持地盤の上に直接、鉄筋コンクリート造の基礎を構築する直接基礎を採用。建物荷重をしっかりと支えます。</span></p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_03.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>せん断補強筋</p>
                            </div>
                            <p class="fcTxt">柱に耐久性を持たせるとともに、せん断破壊を軽減するため約100mmのピッチでせん断補強筋（帯筋）を入れています。</p>
                            <p class="notice">※中子筋・基礎パネルゾーン等を除きます。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_04.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>ダブル配筋</p>
                            </div>
                            <p class="fcTxt">住戸壁は、鉄筋を二重に組み上げた「ダブル配筋」を採用。さらに住戸の外壁厚は約180mm以上を確保しました。</p>
                            <p class="notice">※共用廊下面、バルコニー面の軽量気泡コンクリート部分を除きます。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_05.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="w31">
                            <div class="lineHeading">
                                <p>戸境壁</p>
                            </div>
                            <p class="fcTxt">隣り合う住戸との生活音に配慮し、戸境のコンクリート壁は、厚さ約200mmを確保しました。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_06.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>アウトポール設計</p>
                            </div>
                            <p class="fcTxt">メインバルコニー側は、柱が室内に出ないアウトポール設計を採用しました。お部屋のすみずみまで利用できるので、広々とした空間が広がります。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_07.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>断熱材</p>
                            </div>
                            <p class="fcTxt">建物全体をくるむように、屋上や壁、床裏（住戸最下階）に断熱材を入れ、夏涼しく冬暖かい住み心地を実現。断熱性に優れた発泡硬質ウレタンフォームを、壁に約40mmの厚さで吹き付けることで、結露も軽減します。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_08.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="w31">
                            <div class="lineHeading">
                                <p>水セメント比</p>
                            </div>
                            <p class="fcTxt">コンクリートの強度を左右する指標のひとつが、コンクリート調合（配合）におけるセメント量に対する水の量の重量比。数値が低いほど密実な、耐久性の高いコンクリートとなります。「ジェイグラン京都西大路」では、コンクリートの水セメント比を50％<span class="fs10">※1</span>以下としています。</p>
                            <p class="notice">※1.コンクリートの性質上、乾燥収縮や温度変化による伸縮に伴うひび割れが発生する場合があります（一般的に構造上の問題はありません）。※外構、外構工作物、設備架台基礎、土間コンクリート等住棟以外の付属建物を除きます。</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>対震枠付玄関ドア</p>
                            </div>
                            <p class="fcTxt">地震などの力により、玄関ドア枠が多少変形しても扉が開閉できる対震枠付玄関ドアを採用しています。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_09.png">
                            </div>
                            <p class="rNotice">概念図</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading">
                                <p>住宅性能評価取得</p>
                            </div>
                            <p class="fcTxt">「ジェイグラン京都西大路」では、設計時に申請する設計住宅性能評価は取得済み。現場検査を経て交付される建設住宅性能評価を取得する予定です。</p>
                            <p class="notice">※空気環境に関することの換気対策、室内空気中の化学物質の濃度、音環境に関すること等、一部の項目の評価は受けておりません。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s1_10.png">
                            </div>
                        </div>
                    </div>
                    <!-- 毎日の安心を支えるセキュリティ -->
                    <div class="faciliLead">
                        <p>毎日の安心を支えるセキュリティ</p>
                    </div>
                    <div class="flex_area">
                        <div>

                        </div>
                        <div>
                            
                        </div>
                    </div>
                </div>

                <!-- 2タブ目 -->
                <div class="quaBx quaBx2">
                    <div class="quaBxLead flex_area sp_jc">
                        <p class="quaBxLTxt1"><span>［省エネ･エコ］</span>地球に優しく、ずっと愛される<br class="_sp">住まいであるために、豊かな未来のために。</p>
                        <p class="quaBxLTxt2">Economy & Ecology</p>
                    </div>
                    <!-- Low-E複層ガラス -->
                    <div class="lineHeading">
                        <p>Low-E複層ガラス</p>
                    </div>
                    <p class="fcTxt">板ガラスの間に乾燥空気を封入し、特殊金属（Low-e膜）を施した「Low-E複層ガラス」を採用。紫外線を軽減する効果もあります。</p>
                    <div class="flex_area alstart ptb10">
                        <div class="whalf">
                            <p class="fcLead">●断熱効果アップ</p>
                            <p class="fcTxt">Low-e膜の効果によって、暖房熱を室内へ反射させ、室外へ逃しにくくします。</p>
                            <div class="ptb10 imgBx">
                                <img src="./assets/img/quality/s2_01_pc.png" class="_pc">
                                <img src="./assets/img/quality/s2_01_sp.png" class="_sp">
                            </div>
                        </div>
                        <div class="whalf">
                            <p class="fcLead">●紫外線カット</p>
                            <p class="fcTxt">Low-e膜は人体に有害とされる紫外線をカットします。紫外線による家具調度品やカーペットなどの変色・退色を抑制する効果があります。</p>
                            <div class="ptb10 imgBx">
                                <img src="./assets/img/quality/s2_02_pc.png" class="_pc">
                                <img src="./assets/img/quality/s2_02_sp.png" class="_sp">
                            </div>
                            <p class="rNotice sp_taL">（但し、変色・退色は可視光線・熱・化学物質などによって生じることがありますのでご注意ください。）</p>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w31">
                            <img src="./assets/img/quality/s2_03.png">
                        </div>
                        <div class="w32">
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_04_pc.svg" class="_pc">
                                <img src="./assets/img/quality/s2_04_sp.svg" class="_sp">
                            </div>
                            <p class="notice">算出条件：●気象データ／標準年拡張アメダス気象データ2010年版、2地域 岩見沢、3地域 盛岡、4地域 長野、5地域 宇都宮、6地域 東京、 7地域 宮崎●住宅モデル／自立循環型住宅への設計ガイドラインに掲載の「一般モデル」を採用。断熱仕様は、H25省エネ基準解説書(住宅版)記載の各地域の断熱材厚さに準拠。●空調条件／暖房期間は日平均気温が15℃以下、冷房期間は日平均気温が23℃以上に該当する期間。空調運転スケジュールは、2地域のみ暖房は連続運転、その他の地域の暖房は間欠運転。冷房は全地域間欠運転。暖冷房設定温度は、暖房：20℃、冷房：27℃（就寝時 寝室・居室 28℃）●その他／自然換気：0.5回/h 夏期、室温が設定温度より高く外気温が設定温度より低い時間帯に窓開放換気。内部発熱：発熱量と発熱スケジュールは住宅事業主判断基準に準拠。カーテン：冬期日中なし、その他(冬期夜間、夏期日中、夏期夜間)あり。</p>
                        </div>
                    </div>
                    <!-- プリオール・エコジョーズ -->
                    <div class="lineHeading btNone mt40 sp_mt80">
                        <p>プリオール・エコジョーズ</p>
                        <div class="lHImg">
                            <img src="./assets/img/quality/s2_05.svg">
                        </div>
                    </div>
                    <p class="fcTxt">キッチンやシャワーなどへの給湯はもちろん、自動風呂、床暖房、浴室暖房乾燥、ミストサウナなど1台で何役もこなす給湯器を採用しています。</p>
                    <div class="flex_area alstart ptb10">
                        <div class="w4 imgBx">
                            <img src="./assets/img/quality/s2_09_pc.svg" class="_pc">
                            <img src="./assets/img/quality/s2_09_sp.svg" class="_sp">
                        </div>
                        <div class="w1 imgBx">
                            <div>
                                <img src="./assets/img/quality/s2_10_pc.svg" class="_pc">
                                <img src="./assets/img/quality/s2_10_sp.svg" class="_sp">
                            </div>
                            <p class="notice">※従来ご利用のガス機器（ふろ給湯器・ガスコンロ・ガスファンヒーター）の年間ガス使用量は、609㎥で年間のガス代は約103,000円で一般料金を適用。床暖房ご利用のガス機器（エコジョーズ・ガスコンロ・ガス温水式床暖房・ミストサウナ機能付浴乾）の年間ガス使用量は、664㎥であっためトク料金集合一括受電オプション割引9%を適用し、年間ガス代は約84,000円。※ガス料金は大阪ガスの基準単価（消費税10%、原料費調整額を含む）から、消費税率10％の料金を推定して算出。<br>
                            出典元：大阪ガス</p>
                        </div>
                    </div>
                    <!-- 高圧電力一括受電 -->
                    <div class="lineHeading mt40">
                        <p>高圧電力一括受電</p>
                    </div>
                    <p class="fcTxt">高圧一括受電を採用しており、各住戸の皆様の電気料金を削減します。</p>
                    <div class="imgBx">
                        <img src="./assets/img/quality/s2_11_pc.svg" alt="" class="_pc">
                        <img src="./assets/img/quality/s2_11_sp.png" alt="" class="_sp">
                    </div>
                    <p class="notice">※試算条件 居住面積70〜80㎡、2〜3人家族を想定した試算例（2023年1月時点の単価）。［従来方式］（一般給湯器・ガスコンロ・ガスファンヒーター利用）。電気：関西電力 従量電灯A料金4,165kWh。［関西ビジネスインフォメーション一括受電］（エコジョーズ・ガスコンロ・ガス温水床暖房・ミストサウナ機能付浴室暖房乾燥機）。電気：関西ビジネスインフォメーション一括 従量電灯A料金7%割引+3％割引（大阪ガスとのガス契約に限定）4,165kWh。</p>
                    <!-- 一時止水機能付シャワーヘッド・京都市建築物環境配慮性能表示・省エネルギー対策等級4 -->
                    <div class="flex_area alstart">
                        <div class="w31">
                            <div class="lineHeading mt40">
                                <p>一時止水機能付シャワーヘッド</p>
                            </div>
                            <p class="fcTxt">ワンストップボタンで一時止水機能を使うと50％※1の節水効果があります。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_13.jpg">
                            </div>
                            <p class="rNotice">メーカー参考写真</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_14_pc.svg" alt="" class="_pc">
                                <img src="./assets/img/quality/s2_14_sp.svg" alt="" class="_sp">
                            </div>
                            <p class="notice">※1.グローエ社従来製品と比較。※2.4人世帯での仕様の場合となります。省エネ・防犯住宅アプローチブックによる。※ボタンは一時的な止水です。完全止水は水栓本体で行ってください。</p>
                        </div>
                        <div class="w31">
                            <div class="lineHeading mt40">
                                <p>京都市建築物環境配慮性能表示</p>
                            </div>
                            <p class="fcTxt">「CASBEE」（建築環境総合性能評価システム）とは、建築物の環境性能を評価し格付けする手段として、国土交通省の主導の下に、産・官・学の共同により開発されたものです。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_15.png">
                            </div>
                        </div>
                        <div class="w31">
                            <div class="lineHeading mt40">
                                <p>省エネルギー対策等級4</p>
                            </div>
                            <p class="fcTxt">住宅性能表示制度の「温熱環境・エネルギー消費量に関すること」において、「ジェイグラン京都西大路」は外壁や窓など建物外皮からの熱損失対策を評価する断熱等性能等級が「4」、また設備の省エネ性能から算出される一次エネルギー（石油・石炭・天然ガス等）消費量等級が「4」の評価を取得（予定）<span class="fs10">※1</span>。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_16.png">
                            </div>
                        </div>
                    </div>
                    <!-- 節水・経済性にも優れた「ビルトイン食器洗い乾燥機」 -->
                    <div class="lineHeading mt40">
                        <p>節水・経済性にも優れた<br class="_sp">「ビルトイン食器洗い乾燥機」</p>
                    </div>
                    <p class="fcTxt">静かさと省エネ性能にこだわったビルトインタイプの食器洗い乾燥機。食器の種類ごとに入れる位置が分かれている「カラーナビ食器かご」や大きな操作ボタンなどをはじめ、毎日使うものだからこその配慮も魅力です。</p>
                    <div class="flex_area">
                        <div class="w1 imgBx">
                            <img src="./assets/img/quality/s2_17.jpg">
                        </div>
                        <div class="w4 imgBx">
                            <img src="./assets/img/quality/s2_18_pc.svg" class="_pc">
                            <img src="./assets/img/quality/s2_18_sp.svg" class="_sp">
                        </div>
                    </div>
                    <p class="notice">※1.日本電機工業会自主基準での測定値（食器容量最大の洗浄運転時、ドア面材またはドアパネル取付時）。※2.除菌の試験内容（EW45R2シリーズ）●試験機関名：一般財団法人日本食品分析センター●試験方法：寒天平板培養法●試験成績書発行年月日：2016年12月12日●試験成績書発行番号：第 16118347001 0101号 ●除菌の方法：加熱高温水洗浄方式・温風乾燥方式 ●除菌の対象：庫内食器類 ●試験結果：99%以上の除菌効果※3.2022年4月1日現在（ビルトイン食洗機幅45cm引き出し式において）※4.【手洗い】＜食器40点、小物（はし5膳、スプーン・フォーク各5点）はしは1膳=2点とする水温約20℃＞合計60点を約10Lのお湯（約 40℃40℃）でつけ置き。食器・小物に使う洗い＆すすぎ水量は約40℃のお湯にして食器：1.35L/点、小物0.55L/点使用する。洗剤は1回あたり315ml入り164円（税込）（日本電機工業会調べ）を9.6ml使用※5.【 4〜5 人コース運転時】食器40点、小物（はし5膳、スプーン・フォーク各5点）はしは1膳=2点とする水温約60℃、4 ～５人コース（洗い～乾燥で仕上げた場合。洗剤は1箱詰替え用600ｇ入り422円（税込）（三菱電機調べ）を5ｇ使用。</p>
                    <!-- ダブル保温でしっかり省エネ「サーモバスS」・節水型トイレ -->
                    <div class="flex_area alstart">
                        <div class="whalf posiR">
                            <div class="lineHeading mt40">
                                <p>ダブル保温でしっかり省エネ<br class="_sp">「サーモバスS」</p>
                            </div>
                            <p class="fcTxt s2_19Txt">保温組みフタと浴槽保温材によるダブル保温で、4時間後の温度低下は約−2.5°C。快適な温度をキープするので、節約・省エネに役立ちます。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_19_pc.png" class="_pc">
                                <img src="./assets/img/quality/s2_19_sp.png" class="_sp">
                            </div>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_21.svg">
                            </div>
                            <p class="notice">【試算条件】サーモバスSはユニットバス周辺温度10°C±2°Cの環境下で、4時間後の温度低下が保温なし浴槽：6°C・サーモバスS；2.5°C以下（半年間は温度低下が半分）で、浴槽実用水量：187L、追いだき回数：1回/日、ふろ部燃焼効率80％の給湯器で、給湯後4時間後に追いだきした場合で算出。【引用元】LIXIL基準（159円/㎥（税込））※料金表示は、メーカーパンフレット（2019年9月）によるものです。※数値はあくまでも目安であり、記載通りの削減を保証するものではありません。</p>
                        </div>
                        <div class="whalf">
                            <div class="lineHeading mt40">
                                <p>節水型トイレ</p>
                            </div>
                            <p class="fcTxt">従来型トイレと比べ、洗浄水量を大幅に節水できる節水型トイレ。毎日何度も使う洗浄水だから、環境にも家計にもやさしくしています。</p>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_20_pc.png" class="_pc">
                                <img src="./assets/img/quality/s2_20_sp.png" class="_sp">
                            </div>
                            <div class="imgBx">
                                <img src="./assets/img/quality/s2_22.svg">
                            </div>
                            <p class="notice">試算条件（2021年12月現在）使用状態の設定（4人家族を想定）年間使用日数：365日4人家族（男性2人、女性2人）大1回／人・日、小3回／人・日※「省エネ・防犯住宅推進アプローチブック」より水道代＝265（税込）円／㎥※（一社）日本バルブ工業会より※料金単価は消費税10%での値です。</p>
                        </div>
                    </div>
                    <p class="rNotice sp_taL">※掲載の写真はモデルルーム（C-Aタイプ／B-Gタイプ）にて撮影（2023年1月）したものに一部CG処理を施しております。また、家具・調度品類やオプション仕様等は販売価格に含まれません。</p>
                </div>

                <!-- 3タブ目 -->
                <div class="quaBx quaBx3">
                    <div class="quaBxLead flex_area sp_jc">
                        <p class="quaBxLTxt1"><span>［快適・便利］</span>暮らし心地を高める</p>
                        <p class="quaBxLTxt2">Comfort & Convenience</p>
                    </div>
                    <div class="faciliLead">
                        <p>KITCHEN</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_01.jpg">
                            </div>
                            <p class="fcLead">人造大理石ワイドカウンター</p>
                            <p class="fcTxt">キッチンカウンターには、美しさと耐久性を兼ね備えた人造大理石を採用しました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_02.jpg">
                            </div>
                            <p class="fcLead">レンジフード（整流板付き）</p>
                            <p class="fcTxt">お手入れ簡単塗装のスリムボディタイプ。整流板付きで煙や臭いをすばやく排出します。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_03.jpg">
                            </div>
                            <p class="fcLead">ガラストップガスコンロ</p>
                            <p class="fcTxt">無水両面焼きグリルやWワイド火力バーナーなど、便利な機能を搭載しています。またコンロ、グリルにはタイマーを搭載。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_04.jpg">
                            </div>
                            <p class="fcLead">静音シンク</p>
                            <p class="fcTxt">水はね音を軽減する静音仕様です。また、中央部に奥行をとって、中華鍋なども洗えるスペースを確保しました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_05.jpg">
                            </div>
                            <p class="fcLead">浄水器付ハンドシャワー水栓</p>
                            <p class="fcTxt">蛇口を引き出して使えるため、ポットや鍋に水を注ぎやすく、シンク洗いにも便利です。浄水器を内蔵した一体型混合水栓を採用しました。</p>
                            <p class="notice">※浄水カートリッジは定期的な交換が必要です。</p>
                        </div>
                    </div>
                    <div class="flex_area _pc">
                        <div class="w4">
                            <div class="faciliLead">
                                <p>KITCHEN</p>
                            </div>
                        </div>
                        <div class="w1">
                            <div class="faciliLead">
                                <p>BATHROOM</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_06.jpg">
                            </div>
                            <p class="fcLead">スライドストッカー</p>
                            <p class="fcTxt">引出しキャビネットは空間を有効活用できる足元までたっぷり収納のスライドストッカーです。</p>
                            <p class="notice">※シンク下は除く。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_07.jpg">
                            </div>
                            <p class="fcLead">ソフトクローズ付引出し収納</p>
                            <p class="fcTxt">衝撃を吸収して静かにきちんと閉まります。重いものを収納してもスムーズに引出せ、閉まります。</p>
                            <p class="notice">※小引出しは除く。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_08.jpg">
                            </div>
                            <p class="fcLead">キャビネット底板ステンレス</p>
                            <p class="fcTxt">ステンレス底板なら汚れが染み込まないのでお手入れが簡単。引出しの中を清潔に保てます。</p>
                            <p class="notice">※シンク下、小引出しは除く。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_09.jpg">
                            </div>
                            <p class="fcLead">キッチン吊戸棚</p>
                            <p class="fcTxt">レンジフード横に吊戸棚を設置しました。調理器具などキッチン用品の収納に便利です。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_10.jpg">
                            </div>
                            <p class="fcLead">フルオートバス</p>
                            <p class="fcTxt">スイッチ一つで自動的にお湯張りから保温、足し湯、追い炊きができます。</p>
                        </div>
                    </div>
                    <div class="faciliLead">
                        <p>BATHROOM</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_11.jpg">
                            </div>
                            <p class="fcLead">ラウンドライン浴槽</p>
                            <p class="fcTxt">なめらかな曲線がソフトな印象の浴槽。浴槽上部を広くとった形状が、心地よいバスタイムを演出します。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_12.jpg">
                            </div>
                            <p class="fcLead">プッシュワンウェイ排水栓</p>
                            <p class="fcTxt">ボタンを押すだけで排水できます。浴槽もすっきりとし、見た目もきれいです。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_13.jpg">
                            </div>
                            <p class="fcLead">くるりんポイ排水口</p>
                            <p class="fcTxt">髪の毛が集まりやすく、捨てやすい形状のヘアキャッチャーで排水口の掃除が簡単です。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_14.jpg">
                            </div>
                            <p class="fcLead">グローエ製シャワーヘッド</p>
                            <p class="fcTxt">美しいデザインと高い機能性が魅力のドイツ・グローエ製のシャワーヘッド。4種類の水流の切替が手元のスイッチで操作できます。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_15.jpg">
                            </div>
                            <p class="fcLead">スライドフック付握りバー</p>
                            <p class="fcTxt">高さ調節が自在、手摺兼用のシャワースライドバーを設置しました。</p>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w2">
                            <div class="faciliLead">
                                <p>BATHROOM</p>
                            </div>
                        </div>
                        <div class="w3">
                            <div class="faciliLead">
                                <p>POWDER ROOM</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_16.jpg">
                            </div>
                            <p class="fcLead">キレイドア</p>
                            <p class="fcTxt">カビの発生しやすいドア縁のゴムパッキン（浴室側）をなくし、汚れがたまりやすいドア下のお手入れを簡単にしました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_17.jpg">
                            </div>
                            <p class="fcLead">ドア外タオル掛けバー（2段）</p>
                            <p class="fcTxt">浴室の扉にタオル掛けバーを設置。お洗濯後、乾いたタオル類やバスマットを掛けておくことでができます。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_18.jpg">
                            </div>
                            <p class="fcLead">ボウル一体型カウンター</p>
                            <p class="fcTxt">光沢の美しい人造大理石を採用。継ぎ目がないシンプルなフォルムなのでお手入れ簡単です。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_19.jpg">
                            </div>
                            <p class="fcLead">三面鏡裏収納</p>
                            <p class="fcTxt">三面鏡の裏には、洗面用具やメイク用品が入る収納スペースを確保しました。ドライヤーフックも設置しています。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_20.jpg">
                            </div>
                            <p class="fcLead">シングルレバー水栓</p>
                            <p class="fcTxt">ホースが引き出せるため、洗髪や洗面ボウルの清掃にも便利です。</p>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w4">
                            <div class="faciliLead">
                                <p>POWDER ROOM</p>
                            </div>
                        </div>
                        <div class="w1">
                            <div class="faciliLead">
                                <p>TOILET</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_21.jpg">
                            </div>
                            <p class="fcLead">チャイルドミラー</p>
                            <p class="fcTxt">洗面化粧台の三面鏡下部には、小さなお子さまも使いやすいチャイルドミラーを設置しています。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_22.jpg">
                            </div>
                            <p class="fcLead">ヘルスメーター収納スペース</p>
                            <p class="fcTxt">使いやすい場所に収納できるよう、洗面台下部にヘルスメーター収納スペースを採用しました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_23.jpg">
                            </div>
                            <p class="fcLead">リネン庫</p>
                            <p class="fcTxt">タオル類や洗剤などの収納に便利なリネン庫を設けました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_24.jpg">
                            </div>
                            <p class="fcLead">プルモーション丁番（リネン庫）</p>
                            <p class="fcTxt">扉を閉める際に強く押しても途中でスピードが落ち、最後は吸い込まれるように静かに閉まります。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_25.jpg">
                            </div>
                            <p class="rNotice">トルネード洗浄</p>
                            <p class="fcLead">トルネード洗浄</p>
                            <p class="fcTxt">トルネード洗浄が、少ない水でも効率よく、しっかり汚れを落とします。</p>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w3">
                            <div class="faciliLead">
                                <p>TOILET</p>
                            </div>
                        </div>
                        <div class="w2">
                            <div class="faciliLead">
                                <p>UNIVERSAL DESIGN</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_26.jpg">
                            </div>
                            <p class="rNotice">メーカー参考写真</p>
                            <p class="fcLead">フチなし形状</p>
                            <p class="fcTxt">ボウル面に向かった「返し」のないフチ形状。お掃除しにくい便器のフチをなくしたので、お手入れも簡単にできます。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_27.jpg">
                            </div>
                            <p class="rNotice">メーカー参考写真</p>
                            <p class="fcLead">セフィオンテクト</p>
                            <p class="fcTxt">陶器の表面を100万分の1mmのナノレベルでツルツルに。汚れが付きにくく、落ちやすいメーカー独自の技術です。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_28.jpg">
                            </div>
                            <p class="fcLead">カウンター付<br>トイレットペーパーホルダー</p>
                            <p class="fcTxt">スマートフォンや、小物などを一時的に置ける、カウンター付きのペーパーホルダーを採用しました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_29.jpg">
                            </div>
                            <p class="fcLead">ダブルドアスコープ</p>
                            <p class="fcTxt">小さなお子様でも確認しやすいよう、玄関扉のドアスコープを上下2ヶ所に設置しました。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_30.jpg">
                            </div>
                            <p class="rNotice">トルネード洗浄</p>
                            <p class="fcLead">人感センサー付オートライト</p>
                            <p class="fcTxt">玄関には人が通るのを感知して自動点灯、一定時間後に自動消灯する人感センサー付オートライトを設置。</p>
                        </div>
                    </div>
                    <div class="faciliLead">
                        <p>UNIVERSAL DESIGN</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_31.jpg">
                            </div>
                            <p class="fcLead">保安灯</p>
                            <p class="fcTxt">明るさセンサー切替スイッチを自動にしておくと、周囲が暗くなったときに自動点灯。万が一の停電時には取りはずして携帯電灯としてもお使いいただけます。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_32.jpg">
                            </div>
                            <p class="rNotice">参考写真</p>
                            <p class="fcLead">低位置スイッチ・高位置コンセント</p>
                            <p class="fcTxt">照明スイッチは、お子様や車イスをご利用の方にも届きやすい床上約100cmに。リビング・ダイニング等居室のコンセントは、抜き差ししやすい床上約40cmに設けました。</p>
                            <p class="notice">※マルチメディアコンセント除く。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_33.jpg">
                            </div>
                            <p class="rNotice">参考写真</p>
                            <p class="fcLead">手すり下地補強</p>
                            <p class="fcTxt">廊下やトイレの壁の一部には、将来容易に手すりが設置できるよう、下地補強を施工しています。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_34.jpg">
                            </div>
                            <p class="fcLead">回転式ドアストッパー</p>
                            <p class="fcTxt">開いたドアを押すだけでロックができ、もう一度押すと解除できるため、立ったままで固定・解除が容易に行えます。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_35.jpg">
                            </div>
                            <p class="fcLead">フラットフロア＆プッシュプルハンドル</p>
                            <p class="fcTxt">洗面室と浴室の境は段差をなくしつまずき防止に配慮したフラットフロア。押す・引くだけで開閉できるプッシュプルハンドルも採用しています。</p>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w1">
                            <div class="faciliLead p15">
                                <p class="fs15vw">UNIVERSAL DESIGN</p>
                            </div>
                        </div>
                        <div class="w1">
                            <div class="faciliLead">
                                <p>BALCONY</p>
                            </div>
                        </div>
                        <div class="w3">
                            <div class="faciliLead">
                                <p>FLOOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_36.jpg">
                            </div>
                            <p class="fcLead">低床型ユニットバス</p>
                            <p class="fcTxt">浴室のまたぎ高さを約45cmに抑えた低床設計のユニットバスを採用。小さなお子様やお年寄りの方でも安全に出入りできるよう配慮しています。</p>
                        </div>
                        <div class="faciliCard">
                            <div>
                                <img src="./assets/img/quality/s3_37.jpg">
                            </div>
                            <p class="fcLead">バルコニー水栓</p>
                            <p class="fcTxt">植栽の水やりなどに便利な、バルコニー水栓を設置しました。</p>
                        </div>
                        <div class="flex_area w3">
                            <div class="faciliCard w31 floorFlex">
                                <div>
                                    <p class="fcLead">傷や汚れに強くお手入れもラクな高性能フローリング。</p>
                                    <p class="fcTxt">汚れに強い特殊UVコーティング層と、硬く強靭なオレフィン（クリア層）により、優れた耐久性を実現しました。</p>
                                </div>
                                <div>
                                    <img src="./assets/img/quality/s3_39.png">
                                </div>
                            </div>
                            <div class="faciliCard w32">
                                <div>
                                    <img src="./assets/img/quality/s3_38.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area">
                        <div class="w3">
                            <div class="faciliLead">
                                <p>LIVING</p>
                            </div>
                        </div>
                        <div class="w2">
                            <div class="faciliLead">
                                <p>OTHERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_area alstart">
                        <div class="flex_area alstart w3">
                            <div class="faciliCard w2">
                                <div>
                                    <img src="./assets/img/quality/s3_40.jpg">
                                </div>
                                <div>
                                    <p class="fcLead">センターオープンサッシ</p>
                                    <p class="fcTxt">リビング・ダイニングには、中央部分から左右に大きく開放できる「センターオープンサッシ」を採用。ワイドなバルコニーとの一体感を演出します。</p>
                                </div>
                                <p class="notice">※A-A（Ag）、A-B（Bg）、A-D（Dg）、A-E（Eg）、A-H（Hg）、B-A（Ag）、B-H（Hg）、C-A（At）、C-C（Ct）タイプに採用。</p>
                            </div>
                            <div class="faciliCard lineBx w2">
                                <div class="flex_area">
                                    <div class="whalf">
                                        <p class="fcLead">3枚ワイド引き戸</p>
                                        <p class="fcTxt">リビング・ダイニングには使用用途に応じてワイドに開放できる3枚引戸を採用。</p>
                                    </div>
                                    <div class="whalf">
                                        <img src="./assets/img/quality/s3_42_01.jpg">
                                    </div>
                                </div>
                                <p class="notice">※A-C（Cg）、A-F（Fg）、A-G（Gg）、B-B（Bg）、B-C（Cg）、B-D（Dg）、B-E（Eg）、B-F（Fg）、B-G（Gg）、C-B（Bt）、C-D、C-E、C-F、C-Gタイプに採用。</p>
                            </div>
                        </div>
                        <div class="flex_area alstart w2 _spmt10">
                            <div class="faciliCard w2 _spw2">
                                <p class="fcLead">フルタイムロッカー</p>
                                <p class="fcTxt">留守中に届いた荷物や郵便物を24時間いつでも受け取ることが可能な宅配ボックスを設置しています。</p>
                            </div>
                            <div class="faciliCard w2 _spw2">
                                <div>
                                    <img src="./assets/img/quality/s3_42.png">
                                </div>
                                <p class="rNotice">メーカー参考写真</p>
                            </div>
                        </div>
                    </div>
                    <div class="faciliLead">
                        <p>OTHERS</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard w2">
                            <p class="fcLead">大容量1Gbps高速光ファイバーインターネットサービス［UCOM光 レジデンス］</p>
                            <p class="fcTxt">つなぐネットコミュニケーションズが提供する「ＵＣＯＭ光 レジデンス」を全戸一括提供します。住宅まで最大１Gbpsの高速大容量回線により話題の動画や音楽などがスムーズに楽しめ、快適なインターネット環境がご利用いただけます。<span class="fs10">※1</span></p>
                            <div class="ucomBx">
                                <img src="./assets/img/quality/s3_43.svg">
                            </div>
                        </div>
                        <div class="faciliCard lineBx w2">
                            <p class="fcLead">日本初<span class="fs10">※3</span>の通信サービス「Connectix」を導入</p>
                            <p class="fcTxt">つなぐネットコミュニケーションズが提供する「ＵＣＯＭ光 レジデンス」を全戸一括提供します。住宅まで最大１Gbpsの高速大容量回線により話題の動画や音楽などがスムーズに楽しめ、快適なインターネット環境がご利用いただけます。<span class="fs10">※1</span></p>
                            <div>
                                <img src="./assets/img/quality/s3_44_pc.svg" class="_pc">
                                <img src="./assets/img/quality/s3_44_sp.svg" class="_sp">
                            </div>
                        </div>
                    </div>
                    <p class="notice">
                        ※1.通信速度は技術規格上の最大値でありご利用時の通信速度を保証するものではありません。パソコンの性能、回線の混雑状況、転送するデータ量などにより、大幅に低下する場合があります。<br>
                        ※2.2022年9月発表の株式会社MM総研「全戸一括型マンション ISP調査」調べ※3.マンション一括インターネットサービスで住戸ごとに優先制御できるサービスにおいて（2021年5月時点つなぐネットコミュニケーションズ調べ）<br>
                        ※4.Connectixオプションをご利用の場合は、別途月額利用料が必要となります。
                    </p>
                    <div class="faciliLead">
                        <p>STORAGE</p>
                    </div>
                    <div class="flex_area alstart">
                        <div class="faciliCard w80_sp">
                            <div>
                                <img src="./assets/img/quality/s3_45.jpg">
                            </div>
                            <p class="fcLead">クロゼット</p>
                            <p class="fcTxt">ハンガーパイプや可動棚を設けた使い勝手の良い収納スペースです。</p>
                        </div>
                        <div class="faciliCard w80_sp">
                            <div>
                                <img src="./assets/img/quality/s3_46.jpg">
                            </div>
                            <p class="fcLead">パントリー</p>
                            <p class="fcTxt">キッチンには食料品などの収納に便利なパントリーを設置しています。キッチンには食料品などの収納に便利なパントリーを設置しています。</p>
                        </div>
                        <div class="faciliCard w80_sp">
                            <div>
                                <img src="./assets/img/quality/s3_47.jpg">
                            </div>
                            <p class="fcLead">ウォークインクロゼット</p>
                            <p class="fcTxt">布団やスーツケース、季節ものの家電などの収納に便利です。</p>
                            <p class="notice">※A-G（Gg）、C-B（Bt）タイプを除く。</p>
                        </div>
                        <div class="faciliCard w80_sp">
                            <div>
                                <img src="./assets/img/quality/s3_48.jpg">
                            </div>
                            <p class="fcLead">トランクルーム</p>
                            <p class="fcTxt">アウトドア用品や常時使うことのない生活用品などをたっぷり収納できます。</p>
                            <p class="notice">※A-A（Ag）、A-B（Bg）、A-C（Cg）、A-D（Dg）、A-H（Hg）、B-A（Ag）、B-B（Bg）、C-A（At）、C-Gタイプに採用。</p>
                        </div>
                        <div class="faciliCard w80_sp">
                            <div>
                                <img src="./assets/img/quality/s3_49.jpg">
                            </div>
                            <p class="fcLead">廊下物入れ</p>
                            <p class="fcTxt">日常使う清掃道具や備蓄品、オフシーズンの家電製品などの収納に便利です。</p>
                            <p class="notice">※B-C（Cg）、B-G、C-Fを除く。</p>
                        </div>
                    </div>
                </div>
                <div class="quaBx quaBx4">
                </div>
            </div>
        </div>
    </section>
</main>


<?php include(dirname(__FILE__) . '/assets/inc/footer.php'); ?>
<script>
    $(".tab1").on('click',function(){
        $(".tab").removeClass('active');
        $(".quaBx").removeClass('show');
        $(".tab1").addClass('active');
        $(".quaBx1").addClass('show');
    });

    $(".tab2").on('click',function(){
        $(".tab").removeClass('active');
        $(".quaBx").removeClass('show');
        $(".tab2").addClass('active');
        $(".quaBx2").addClass('show');
    });

    $(".tab3").on('click',function(){
        $(".tab").removeClass('active');
        $(".quaBx").removeClass('show');
        $(".tab3").addClass('active');
        $(".quaBx3").addClass('show');
    });

    $(".tab4").on('click',function(){
        $(".tab").removeClass('active');
        $(".quaBx").removeClass('show');
        $(".tab4").addClass('active');
        $(".quaBx4").addClass('show');
    });
</script>
</body>
</html>
