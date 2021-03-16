**
 * 使用BotAPI发送文本消息给个人或群组
 * 
 * @return boolean
 */
public function send()
{
    $token = '1596808316:AAE23FkStQCCFnjPtCw_2OmvE_t9YoEzvDs';
    $chat_id = '1176105400';
    $message = 'hellohello';
    try {
        $bot = new \TelegramBot\Api\BotApi($token);
        $m = $bot->sendMessage($chat_id, $message);
        if ($m instanceof \TelegramBot\Api\Types\Message) {
            return true;
        }
        return true;
    } catch (\Exception $e) {
        return false;
    }