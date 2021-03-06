<?php


namespace leqee\CMBFirmBankSDK\api\Account\component;


use leqee\CMBFirmBankSDK\XmlBuilder\ResponseComponent;

/**
 * Class CPRRCRTNX1Component
 * @package leqee\CMBFirmBankSDK\api\Account\component
 * @property string RRCTYP C(8) 回单类型
 * @property string BRNNBR C(6) 交易机构
 * @property string RTNEAC C(35) 退款户口号
 * @property string RTNEAN Z(62) 退款户名
 * @property string RTNEAB Z(62) 退款开户行
 * @property string RTNEAA Z(62) 退款开户地
 * @property string SNDEAC C(35) 付方户口号
 * @property string SNDEAN Z(62) 付方户名
 * @property string SNDEAB Z(62) 付方开户行
 * @property string SNDEAA Z(62) 付方开户地
 * @property string REGEAC C(35) 登记户口号
 * @property string RCVEAC C(35) 收方户口号
 * @property string RCVEAN Z(62) 收方户名
 * @property string RCVEAB Z(62) 收方开户行
 * @property string RCVEAA Z(62) 收方开户地
 * @property string PSBTYP C(4) 凭证种类
 * @property string PSBNBR C(20) 凭证号码
 * @property string RTNDAT D 退款日期
 * @property string ISUDAT D 原发起日期
 * @property string CCYNBR C(2) 交易货币
 * @property string TRSAMT M 金额
 * @property string TRSNBR C(30) 交易流水
 * @property string TSKNBR C(13) 任务号
 * @property string BUSNBR C(16) 汇款编号
 * @property string TLRNBR C(6) 经办柜员
 * @property string ISTNBR C(13) 打印实例号
 * @property string NARTXT Z(100) 摘要
 * @property string NARTX1 Z(100) 扩展摘要
 * @property string SPLC80 C(80) 特殊码80
 */
class CPRRCRTNX1Component extends ResponseComponent
{
    public function getTagName(): string
    {
        return 'CPRRCRTNX1';
    }
}
